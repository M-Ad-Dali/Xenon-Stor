<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
    // إضافة اللغة تلقائياً لكل الروابط التي تنشئها بـ route()
    URL::defaults(['lang' => app()->getLocale()]);
}
}
