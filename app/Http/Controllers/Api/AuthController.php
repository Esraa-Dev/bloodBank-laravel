<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\resetPassword;
use App\Models\Client;
use App\models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

    public function profile(Request $request)
    {

        $validation = validator()->make($request->all(), [
            'password' => 'confirmed ',
            'email' => Rule::unique('clients')->ignore($request->user()->id),
            'phone' => Rule::unique('clients')->ignore($request->user()->id),
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0, $validation->errors()->first(), $data);

        }
        $loginUser = $request->user();
        $loginUser->update($request->all());
    }

    public function register(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name' => 'required',
            'city_id' => 'required',
            'phone' => 'required',
            'last_donation_date' => 'required',
            'blood_type_id' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|unique:clients',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = Str::random(60);
        $client->save();
        return responseJson(
            1, 'تم الاضافه بنجاح', ['api_token' => $client->api_token, 'client' => $client]);
    }

    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'phone' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = Client::where('phone', $request->phone)->first();
        if ($client) {
            if (Hash::check($request->password, $client->password)) {
                return responseJson(1, "تم تسجيل الدخول", [
                    'api_token' => $client->api_token,
                    'client' => $client,
                ]);
            } else {
                return responseJson(0, ' بيانات الدخول غير صحيحة');
            }
        } else {
            return responseJson(0, ' بيانات الدخول غير صحيحة');
        }
    }

    public function resetPassword(Request $request)
    {
        $user = Client::where('phone', $request->phone)->first();
        if ($user) {
            $code = rand(1111, 9999);
            $update = $user->update(['pin_code' => $code]);

            if ($update) {
                Mail::to($user->email)
                    ->send(new resetPassword($user));
                return responseJson(1, "برجاء فحص هاتفك", ['pin_code_for test' => $code]);
            } else {
                return responseJson(0, "حدث خطأ", "حاول مرةاخري");
            }
        } else {
            return responseJson(0, "لا يوجداي حساب مرتبط بهذا الهاتف");
        }
    }

    public function newPassword(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'pin_code' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0, $validation->errors()->first(), $data);

        }
        $user = Client::where('pin_code', $request->pin_code)->where('pin_code', '!=', 0)
            ->where('phone', $request->phone)->first();
        if ($user) {
            $user->password = bcrypt($request->password);
//   $user->pin_code = null;
            if ($user->save()) {
                return responseJson('1', 'تم تغيير كلمة المرور بنجاح');
            } else {
                return responseJson('0', 'حدث خطأ', 'حاول مره أخري');

            }
        } else {
            return responseJson('0', 'هذا الكود غير صالح');

        }
    }

    public function registerToken(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'token' => 'required',
            'platform' => 'required|in:android, ios',
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0, $validation->errors()->first(), $data);
        }
        Token::where('token', $request->token)->delete();
        $request->user()->tokens()->create($request->all());
        return responseJson(1, 'تم تسجيل بنجاح');
    }

    public function removeToken(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'token' => 'required',
        ]);
        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0, $validation->errors()->first(), $data);
        }
        Token::where('token', $request->token)->delete();
        return responseJson(1, 'تم الحذف بنجاح ');

    }

}