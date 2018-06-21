<?php

namespace App\Providers;

use App\Http\ViewComposers\logo;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'layout.index',
            'layout.page',
            'web.nosotros',
            'web.productos',
        ],logo::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
