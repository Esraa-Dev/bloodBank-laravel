<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\Api\AuthController;
/*
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return view('app');
});

Route::prefix('v1')->group(function(){
Route::get('/governorates', [MainController::class, 'govenerates']);
Route::get('/blood-types', [MainController::class, 'bloodType']);
Route::get('/cities', [MainController::class, 'cities']);
Route::get('/donation-request/create', [MainController::class, 'donationRequestCreate']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/new-password', [AuthController::class, 'newPassword']);



Route::middleware('auth:api')->group(function(){
    Route::get('posts', [MainController::class, 'posts']);
});

});