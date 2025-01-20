<?php
//controller
use App\Http\Controllers\userController\userDashboardController;


//middleware
use App\Http\Middleware\User\UserRollCheck;

Route::get('dashboard',[userDashboardController::class,'dashboard'])->name('dashboard');

Route::group(['prefix' => 'user' ,'as' => 'user.' , 'middleware' => UserRollCheck::class],function(){
    // Route::get('index',function(){
    //     return view('user.index');
    // })->name('index');
});
