<?php
use App\Http\Middleware\User\UserRollCheck;


Route::group(['prefix' => 'user' ,'as' => 'user.' , 'middleware' => UserRollCheck::class],function(){
    // Route::get('index',function(){
    //     return view('user.index');
    // })->name('index');
});
