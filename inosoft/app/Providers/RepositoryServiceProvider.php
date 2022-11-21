<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\KendaraanRepositoryInterface;
use App\Repositories\KendaraanRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() 
    {
        $this->app->bind(KendaraanRepositoryInterface::class, KendaraanRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
