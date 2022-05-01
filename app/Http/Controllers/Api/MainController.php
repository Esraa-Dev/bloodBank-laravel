<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use App\Models\Post;
use App\Models\BloodType;
use App\Models\Governorate;
use Illuminate\Http\Request;
use App\Models\DonationRequest;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function govenerates(){
       $govenerates=Governorate::all();
    return responseJson(1,"success",$govenerates);
}
    public function posts(){
       $posts=Post::all();
    return responseJson(1,"success",$posts);
}
  public function cities(Request $request){
  $cities = City::where(function ($query) use($request){
 if ($request->has('governorate_id'))
 {

 $query->where('governorate_id', $request->governorate_id);
 }
})->get();
return responseJson(1, "success", $cities);

  }    public function bloodType(){
       $BloodType=BloodType::all();
    return responseJson(1,"success",$BloodType);
}

public function donationRequestCreate(Request $request){

   DonationRequest::create( $request->all());
  $rules = [
    'patient_name' => 'required',
    'patient_age' => 'required:digits',
    'blood_type_id' => 'required',
    'bags_num' => 'required:digits',
    'hospital_adress' => 'required',
    'city_id' => 'required|exists:cities,id',
    'patient_phone' => 'required:digits:11',
];
// |in:-o,o+,B-,B+,A+,A-, AB-, AB+

   $validator = validator()->make($request->all(),$rules);
if ($validator->fails())
{
   return responseJson(0,$validator->errors()->first(),$validator->errors());
}
// create donation request
$donationRequest = $request->user()->requests()->create($request->all());
}
}
