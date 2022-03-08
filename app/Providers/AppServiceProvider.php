<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Inertia::share('flash', function () {
            return [
                'status' => Session::get('status')
            ];
        });
        if(env('APP_ENV') == 'production'){
            URL::forceScheme('https');
        }
    }
}