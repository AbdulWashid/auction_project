<?php
use App\Http\Middleware\User\UserRollCheck;

use App\Http\Controllers\userController\{
                                            viewOpenController,
                                            WalletController,
                                            PusherController,
                                            cartController,
                                        };


Route::group(['prefix' => 'user' ,'as' => 'user.' , 'middleware' => UserRollCheck::class],function(){

    Route::get('dashboard',[viewOpenController::class,'dashboard'])->name('dashboard');
    Route::get('profile',[viewOpenController::class,'profile'])->name('profile');
    Route::get('livebid/{id}',[viewOpenController::class,'livebid'])->name('livebid');


    Route::resource('cart',cartController::class);


    Route::get('/recharge', [WalletController::class, 'index'])->name('recharge');
    Route::post('/recharge', [WalletController::class, 'payment'])->name('payment');
    
    Route::post('event/{id}',[PusherController::class,'index'])->name('new.bid');

    Route::delete('cart/remove/{id}',[cartController::class,'remove'])->name('cart.remove');
    Route::post('cart/add/{id}',[cartController::class,'add'])->name('cart.add');
    
});

