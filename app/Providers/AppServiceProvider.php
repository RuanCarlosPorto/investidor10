<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use App\Contracts\Repositories\CategoriesRepositoryContract;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Repositories\NewsRepositoryContract;
use App\Repositories\NewsRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NewsRepositoryContract::class, NewsRepository::class);
        $this->app->bind(CategoriesRepositoryContract::class, CategoriesRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
