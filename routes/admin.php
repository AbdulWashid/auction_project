<?php
 
use App\Http\Middleware\Admin\adminRollCheck; //admin middleware
use App\Http\Controllers\adminController\{categoryController,
                                        productController,
                                        userShowController,
                                        featuresController,
                                        adminProfileController,
                                    };


Route::group(['prefix' => 'admin' ,'as' => 'admin.' , 'middleware' => adminRollCheck::class],function(){
    Route::view('index','Admin.index')->name('index');                      //admin index page route
    Route::resource('category',categoryController::class);                  //category route
    Route::resource('product',productController::class);                    //product route
    Route::resource('feature',featuresController::class);                
    Route::resource('profile',adminProfileController::class);              
    Route::get('user',[userShowController::class,'show'])->name('user.show');  
});
