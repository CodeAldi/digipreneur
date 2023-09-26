<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LandingPageController::class)->group(function(){
    Route::get('/','index');
});

Route::controller(LoginController::class)->middleware('guest')->group(function(){
    Route::get('login','login')->name('login');
    Route::get('register','register')->name('register');
    Route::post('authentication', 'authenticate')->name('authentication');
    Route::get('logout','logout')->name('logout');
});

Route::controller(AdminController::class)->middleware('auth')->group(function(){
    Route::get('admin','index')->name('admin.home');
});