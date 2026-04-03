<?php

namespace App\Providers;

use App\Models\Employee;
use App\Models\Post;
use App\Models\User;
use App\Observers\EmployeeObserver;
use App\Observers\PostObserver;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        Employee::observe(EmployeeObserver::class);
        Post::observe(PostObserver::class);

        Gate::define("isAdmin", function (User $user) {
            return $user->role === 'admin';
        });
    }
}
