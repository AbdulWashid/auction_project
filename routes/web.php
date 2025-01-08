<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
use App\Http\Middleware\rollCheckMiddleware;

Route::get('/', function () {
    return view('user.sign-up');
});

Route::resource('login',crudController::class);
Route::post('login',[crudController::class,'store'])->name('login')->middleware(rollCheckMiddleware::class);
