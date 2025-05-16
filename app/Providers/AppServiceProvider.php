<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('use-translation-manager', function (?User $user) {
            // Aquí puedes personalizar la lógica de autorización según tus necesidades
            return $user !== null && $user->hasRole('super-admin');
        });
    }
}
