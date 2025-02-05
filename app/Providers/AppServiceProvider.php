<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('user.layouts.cart', function ($view) {
            $savePro = product::all();
            $view->with('savePro', $savePro); // Share with the view
        });
    }
}
