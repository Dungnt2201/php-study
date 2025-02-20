<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\CommentPolicy;
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
    public function boot()
    {
        Gate::define('comment', function ($user) {
            return $user->role === 'comment';
        });
    }
    protected $policies = [
        User::class => CommentPolicy::class,
    ];
}
