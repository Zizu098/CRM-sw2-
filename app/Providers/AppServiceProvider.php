<?php

namespace App\Providers;

use App\Adapters\CarbonAdapter;
use App\Adapters\ICarbonAdapter;
use App\Repositories\Todo\EloquentToday;
use App\Repositories\Todo\TodoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoRepository::class, EloquentToday::class);
        $this->app->singleton(ICarbonAdapter::class, CarbonAdapter::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
