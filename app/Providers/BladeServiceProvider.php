<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('route', function($route) {
            if(is_array($route)) {
                $result = false;
                foreach ($route as $r) {
                    $result = request()->routeIs($r);
                    if($result) return true;
                }
            }
            return request()->routeIs($route);
        });
    }
}
