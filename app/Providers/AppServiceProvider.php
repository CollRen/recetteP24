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

/*         $locale = session()->get('locale', 'fr');
        dd($locale);
        app('translator')->setLocale($locale); */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        Paginator::useTailwind();
        // Il faut trouver une façon d'envoyer la valeur local en ou fr ici
        
        $locale = session()->get('locale', 'en');
        View::share('locale', $locale);
    }

    
}
