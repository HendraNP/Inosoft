<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\KendaraanRepositoryInterface;
use App\Repositories\KendaraanRepository;
use App\Interfaces\MotorRepositoryInterface;
use App\Repositories\MotorRepository;
use App\Interfaces\MobilRepositoryInterface;
use App\Repositories\MobilRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() 
    {
        $this->app->bind(KendaraanRepositoryInterface::class, KendaraanRepository::class,MotorRepositoryInterface::class, MotorRepository::class,MobilRepositoryInterface::class, MobilRepository::class);
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
