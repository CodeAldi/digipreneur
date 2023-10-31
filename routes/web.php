<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPelatihanController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubMateriController;
use App\Http\Controllers\UserController;
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
    Route::get('login','login')->middleware('guest')->name('login');
    Route::get('register','register')->middleware('guest')->name('register');
    Route::post('register/store','storeRegister')->middleware('guest')->name('register.store');
    Route::post('authentication', 'authenticate')->middleware('guest')->name('authentication');
    Route::get('logout','logout')->middleware('auth')->name('logout');
});

Route::controller(AdminController::class)->middleware('auth')->group(function(){
    Route::get('admin','index')->name('admin.home');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('admin/user/all',[UserController::class, 'index'])->name('admin.user.index');
    Route::post('admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
    // instruktur
    Route::get('admin/instruktur/index',[InstructorController::class, 'index'])->name('admin.instruktur.index');
    Route::get('admin/instruktur/create',[InstructorController::class, 'create'])->name('admin.instruktur.create');
    Route::get('admin/instruktur/store/{id}',[InstructorController::class, 'store'])->name('admin.instruktur.store');
    // materi pelatihan
    Route::controller(AdminPelatihanController::class)->group(function(){
        Route::get('admin/pelatihan/index','index')->name('admin.pelatihan.index');
        Route::get('admin/pelatihan/create','create')->name('admin.pelatihan.create');
        Route::post('admin/pelatihan/store','store')->name('admin.pelatihan.store');
        Route::get('admin/pelatihan/{id}/show','show')->name('admin.pelatihan.show');
        Route::get('admin/pelatihan/{id}/edit','edit')->name('admin.pelatihan.edit');
        Route::post('admin/pelatihan/{id}/update','update')->name('admin.pelatihan.update');
        Route::get('admin/pelatihan/{id}/delete','destroy')->name('admin.pelatihan.delete');
    });
    // sub materi pelatihan
    Route::controller(SubMateriController::class)->group(function(){
        Route::get('admin/sub-materi-pelatihan/{materi}/index','index')->name('admin.subMateri.index');
        Route::post('admin/sub-materi-pelatihan/store','store')->name('admin.subMateri.store');
        Route::get('admin/sub-materi-pelatihan/{sub_materi}/delete','destroy')->name('admin.subMateri.delete');
    });
});