<?php
 
use App\Http\Middleware\Admin\adminRollCheck; 
use App\Http\Controllers\adminController\categoryController;
use App\Http\Controllers\adminController\productController;
use App\Http\Controllers\adminController\userShowController;


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => adminRollCheck::class],function(){
    Route::view('index','Admin.index')->name('index');
    Route::resource('category',categoryController::class);
    Route::resource('product',productController::class);
    Route::get('user',[userShowController::class,'show'])->name('user.show');
});
