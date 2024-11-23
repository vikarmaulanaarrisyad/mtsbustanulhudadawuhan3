<?php

namespace App\Providers;

use App\Models\ProfilSekolah;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('profilSekolah', function ($app) {
            return ProfilSekolah::first();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $profilSekolah = app('profilSekolah');
            $view->with('profilSekolah', $profilSekolah);
        });
    }
}
