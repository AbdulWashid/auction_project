<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
                            viewOpenController,         // without login view open controller
                            authController,             //auth controller login and registration
                        };

//without login view related route
Route::get('/',[viewOpenController::class,'index'])->name('user.index');                    //main index page route
Route::get('category/{id}',[viewOpenController::class,'category'])->name('user.category');  //category wise product page route
Route::get('product/{id}',[viewOpenController::class,'product'])->name('user.product');     //product details page route
Route::view('contact','user.contact')->name('contact');


//login registration related route
Route::view('login','user.sign-in')->name('loginPage');                                     // login page route
Route::view('registration','user.sign-up')->name('registrationPage');                       // registration page route
Route::post('login',[authController::class,'login'])->name('login');                        // login check
Route::post('registration',[authController::class,'registration'])->name('registration');   // registration data store
Route::get('logout',[authController::class,'logout'])->name('logout');                      // logout route

// google login
Route::get('google',[authController::class,'google'])->name('googleBtn');                   // google login
Route::get('auth/google',[authController::class,'googleData'])->name('google.auth');        // google login


require __DIR__.'/admin.php';
require __DIR__.'/user.php';