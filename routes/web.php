<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {

});

Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {

});

Route::any('category_dropdown', 'App\Http\Controllers\Webcontroller@single_product');

