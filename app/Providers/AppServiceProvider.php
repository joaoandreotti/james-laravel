<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //
        if (env('DB_CONNECTION') === 'sqlite' && env('DB_DATABASE') === ':memory:') {
            \DB::statement('PRAGMA foreign_keys=ON;');
            error_log('wtf');
            \Artisan::call('migrate:refresh --seed');
            error_log('omg');
        }
    }
}
