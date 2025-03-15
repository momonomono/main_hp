<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Forms\Button;
use App\View\Components\Forms\Input;
use App\View\Components\Test;

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
        Blade::component('button',Button::class);
        Blade::component('input',Input::class);
        Blade::component('test',Test::class);

        Blade::componentNamespace('App\\View\\Components','page');
    }
}
