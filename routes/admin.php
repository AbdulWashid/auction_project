<?php
use App\Http\Middleware\rollCheckMiddleware;  


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => rollCheckMiddleware::class],function(){
    Route::get('index',function(){
        return view('Admin.index');
    })->name('index');
});
