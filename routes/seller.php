<?php

use App\Http\Controllers\seller\auth\ForgotPasswordController;
use App\Http\Controllers\seller\auth\LoginController;
use App\Http\Controllers\seller\auth\RegistrationController;
use App\Http\Controllers\seller\HomeController;
use App\Http\Controllers\seller\ProductController;
use App\Http\Controllers\seller\SellerBulkImageUploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Seller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('seller')->name('seller.')->group(function () {

    Route::middleware(['guest:seller', 'PreventBackHistory'])->group(function () {
        Route::get('register', [RegistrationController::class, 'index'])->name('register');
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('validate-seller-login', [LoginController::class, 'validateSeller'])->name('validate-seller-login');

        //Country State City Routes
        Route::get('get-state', [RegistrationController::class, 'getState'])->name('get-state');
        Route::get('get-city', [RegistrationController::class, 'getCity'])->name('get-city');

        Route::get('seller-forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('seller-forget-password');
        Route::post('send-forgot-password-link', [ForgotPasswordController::class, 'resetPassword'])->name('send-forgot-password-link');
        Route::get('forgot-password/{token}', [ForgotPasswordController::class, 'forgotPasswordValidate']);
        Route::put('update-reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('update-reset-password');
    });

    Route::middleware(['auth:seller', 'PreventBackHistory'])->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        //Bulk image upload
        Route::get('bulk-image-upload', [SellerBulkImageUploadController::class, 'index'])->name('bulk-image-upload');
        Route::post('bulk-image-upload', [SellerBulkImageUploadController::class, 'store'])->name('bulk-image-upload');

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', [ProductController::class,'index'])->name('index');
            Route::post('store', [ProductController::class,'store'])->name('store');
        });
    });
});
