<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//client login-reg
Route::get('client/login',[App\Http\Controllers\ClientController::class,'login']);
Route::post('client/register',[App\Http\Controllers\ClientController::class,'register']);
//admin log-reg
Route::get('admin/login',[App\Http\Controllers\AdminController::class,'login']);
Route::post('admin/register',[App\Http\Controllers\AdminController::class,'register']);
//Booking
Route::apiResource('client/booking',BookingController::class);
Route::post('client/booking/send/{client}',[App\Http\Controllers\BookingController::class,'store']);
Route::get('admin/booking/status',[App\Http\Controllers\BookingController::class,'statusCheck']);

Route::apiResource('admin/bus',BusController::class);
Route::apiResource('admin/client',ClientController::class);
Route::apiResource('admin/driver',DriverController::class);
Route::apiResource('admin',AdminController::class);



