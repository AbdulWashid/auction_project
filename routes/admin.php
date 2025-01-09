<?php
 
use App\Http\Middleware\Admin\adminRollCheck; 


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => adminRollCheck::class],function(){
    Route::get('index',function(){
        return view('Admin.index');
    })->name('index'); 
});
