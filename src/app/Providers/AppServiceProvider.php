<?php

namespace App\Providers;

use App\Repositories\CommentRepositoryImpl;
use App\Repositories\Interface\CommentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            CommentRepository::class,
            CommentRepositoryImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
