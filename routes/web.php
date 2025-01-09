<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('user.sign-in');
});
Route::view('login','user.sign-in')->name('loginPage'); // login page route
Route::post('login',[authController::class,'login'])->name('login'); // login data store
Route::get('logout',[authController::class,'logout'])->name('logout');

require __DIR__.'/admin.php';
require __DIR__.'/user.php';
