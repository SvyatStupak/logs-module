<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\LoggerInterface;
use App\Services\LoggerService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoggerInterface::class, function () {
            return new LoggerService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
