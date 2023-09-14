<?php

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

Route::controller(LoginController::class)->group(function(){
    Route::get('/login','login');
    Route::get('/register','register');
});