<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;


Route::get('/', function () {
    return view('user.index');
})->name('user.index');



Route::view('login','user.sign-in')->name('loginPage'); // login page route
Route::view('registration','user.sign-up')->name('registrationPage'); // registration page route
Route::post('login',[authController::class,'login'])->name('login'); // login check
Route::post('registration',[authController::class,'registration'])->name('registration'); // registration data store
Route::get('logout',[authController::class,'logout'])->name('logout');

require __DIR__.'/admin.php';
require __DIR__.'/user.php';