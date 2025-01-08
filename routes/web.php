<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('user.sign-in');
});
Route::view('login','user.sign-in')->name('loginPage');
Route::post('login',[authController::class,'login'])->name('login');

require __DIR__.'/admin.php';
