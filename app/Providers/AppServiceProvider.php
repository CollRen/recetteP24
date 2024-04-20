<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
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
    public function boot()
    {
        //Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        // Il faut trouver une façon d'envoyer la valeur local en ou fr ici
        View::share('locale', 'en');
    }

    
}
