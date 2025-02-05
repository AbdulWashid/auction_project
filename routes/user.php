<?php
use App\Http\Middleware\User\UserRollCheck;

use App\Http\Controllers\userController\{
                                            userDashboardController,
                                            WalletController,
                                            PusherController,
                                            cartController,
                                        };


Route::group(['prefix' => 'user' ,'as' => 'user.' , 'middleware' => UserRollCheck::class],function(){
    Route::get('dashboard',[userDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('profile',[userDashboardController::class,'profile'])->name('profile');
    Route::get('livebid/{id}',[userDashboardController::class,'livebid'])->name('livebid');

    Route::resource('cart',cartController::class);


    Route::get('/recharge', [WalletController::class, 'index'])->name('recharge');
    Route::post('/wallet/order', [WalletController::class, 'createOrder'])->name('wallet.createOrder');
    Route::post('/wallet/payment-success', [WalletController::class, 'paymentSuccess'])->name('wallet.paymentSuccess');


    Route::view('pusher','pusher');
    
    Route::get('event',[PusherController::class,'index'])->name('bid');
    Route::post('event',[PusherController::class,'index'])->name('new.bid');
    // Route::post('bid',[PusherController::class,'newbid'])->name('new.bid');
});
