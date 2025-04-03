<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\SigninComposer;
use App\Http\ViewComposers\LoginComposer;
use Illuminate\Support\Facades\View;

class SigninServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('signin', SigninComposer::class);
        View::composer('login',loginComposer::class);
    }
}
