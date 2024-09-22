<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('has_role_or_permission', function ($role_or_permission, $return) {
                if (auth()->check() && (auth()->user()->hasRole('superadmin') || auth()->user()->can($role_or_permission))) {
                    return;
                }
                return $return;
            });
        });
    }
}
