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
            'layout.header',
            'web.nosotros',
            'web.productos',
            'web.producto',
            'web.contactanos',
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
