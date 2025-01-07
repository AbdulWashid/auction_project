<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
use App\Http\Middleware\rollCheckMiddleware;

Route::get('/', function () {
    return view('main.sign-up');
});

Route::get('login',[crudController::class,'create']);
Route::post('login',[crudController::class,'store'])->name('login')->middleware(rollCheckMiddleware::class);
