<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::define('is-user', function ($user, $user_id) {
            return $user->id == $user_id;
        });

        Gate::define('is-admin', function ($user) : bool {
            return $user->is_admin != null;
        });
    }
}
