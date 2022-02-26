<?php

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::prefix('admin')->name('admin.')->group(function () {
//    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
//        Route::get('register', [RegistrationController::class, 'index'])->name('register');
//        Route::get('login', [LoginController::class, 'index'])->name('login');
//    });
//
//    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
//
//    });

Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::post('main/create', [CategoryController::class, 'categoryMainCreate'])->name('main.create');
    Route::post('sub/create', [CategoryController::class, 'categorySubCreate'])->name('sub.create');
    Route::post('sub1/create', [CategoryController::class, 'categorySub1Create'])->name('sub1.create');
    Route::get('subcategory', [CategoryController::class, 'subcategory'])->name('subcategory');
    Route::get('subcategory1', [CategoryController::class, 'subcategory1'])->name('subcategory1');
    Route::get('tree/{id}', [CategoryController::class, 'tree'])->name('tree');
});
