<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Database\Schema\defaultStringLength;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         if(request()->server("SCRIPT_NAME") !== 'artisan') {
        view ()->share ('categories', Categorie::all ());
    }

        Schema::defaultStringLength(191);
        Blade::if('admin', function () {
        return auth()->check() && auth()->user()->role === 'admin';
    });

        Blade::if('adminOrOwner', function ($id) {
        return auth()->check() && (auth()->id() === $id || auth()->user()->role === 'admin');
    });  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
