<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
         // for product cart 
         View::composer('user.layouts.cart', function ($view) {
            $cartPro = Cart::where('user_id', '=',Auth::id())
                                ->join('products', 'carts.product_id', '=', 'products.id')
                                ->select('products.id as product_id','products.name','products.bid_start_price','products.image','carts.*')
                                ->orderBy('carts.id', 'desc')
                                ->get();
            $view->with('cartPro', $cartPro); 
        });

        // for product cart 
        View::composer('user.layouts.header', function ($view) {
            $cartCount = Cart::where('user_id', '=',Auth::id())
                            ->count();
            $view->with('cartCount', $cartCount); 
        });
    }
}
