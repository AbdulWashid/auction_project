<?php
 
use App\Http\Middleware\Admin\adminRollCheck; 
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => adminRollCheck::class],function(){
    Route::view('index','Admin.index')->name('index');
    Route::resource('category',categoryController::class);
});
