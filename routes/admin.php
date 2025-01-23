<?php
 
use App\Http\Middleware\Admin\adminRollCheck; 
use App\Http\Controllers\adminController\categoryController;
use App\Http\Controllers\adminController\productController;
use App\Http\Controllers\adminController\userShowController;
use App\Http\Controllers\adminController\featuresController;
use App\Http\Controllers\adminController\adminProfileController;


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => adminRollCheck::class],function(){
    Route::view('index','Admin.index')->name('index');
    Route::resource('category',categoryController::class);
    Route::resource('product',productController::class);
    Route::resource('feature',featuresController::class);
    Route::resource('profile',adminProfileController::class);
    Route::get('user',[userShowController::class,'show'])->name('user.show');
});
