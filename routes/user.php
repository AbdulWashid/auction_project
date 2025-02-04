<?php
use App\Http\Controllers\userController\userDashboardController;
use App\Http\Middleware\User\UserRollCheck;


Route::group(['prefix' => 'user' ,'as' => 'user.' , 'middleware' => UserRollCheck::class],function(){
    Route::get('dashboard',[userDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('profile',[userDashboardController::class,'profile'])->name('profile');
    Route::get('livebid/{id}',[userDashboardController::class,'livebid'])->name('livebid');
    Route::get('recharge',[userDashboardController::class,'recharge'])->name('recharge');
});
