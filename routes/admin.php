<?php
use App\Http\Middleware\rollCheckMiddleware;  


Route::group([ 'middleware' => rollCheckMiddleware::class,'prefix' => 'admin'],function(){
    Route::get('index',function(){
        dd('hello from admin route php file');
        return view('master.index');
        // dd("hello from index function in route");
    })->name('index');
});