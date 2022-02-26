<?php

use App\Http\Controllers\seller\api\ApiController;
use App\Http\Controllers\seller\auth\RegistrationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any('generate-otp', [ApiController::class,'generateOtp'])->name('generate-otp');
Route::post('validate-otp', [ApiController::class,'validateOtp'])->name('validate-otp');
Route::post('check-gst-number', [ApiController::class,'validateGstNumber'])->name('check-gst-number');
Route::post('create-seller-account', [RegistrationController::class, 'createSellerAccount'])->name('create-seller-account');
Route::get('main_category', [ApiController::class,'mainCategory'])->name('mainCategory');
Route::get('get_2nd_level_childs/{id}', [ApiController::class,'childCategory'])->name('childCategory');
