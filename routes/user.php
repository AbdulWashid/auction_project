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
    Route::post('/wallet/order', [WalletController::class, 'createOrder'])->name('wallet.createOrder');
    Route::post('/wallet/payment-success', [WalletController::class, 'paymentSuccess'])->name('wallet.paymentSuccess');


    
    Route::post('event/{id}',[PusherController::class,'index'])->name('new.bid');
    // Route::post('bid',[PusherController::class,'newbid'])->name('new.bid');
});
