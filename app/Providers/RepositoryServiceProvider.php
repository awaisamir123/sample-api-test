<?php

namespace App\Providers;

use App\Repository\AuthRepositoryInterface;
use App\Repository\Eloquent\AuthRepository;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\PostRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
