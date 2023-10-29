<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Sections\SectionRepository;
use App\Repository\Sections\SectionRepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\Doctors\DoctorRepositoryInterface;
use App\Repository\Services\SingleServiceRepository;
use App\Repository\Services\SingleServiceRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind(SectionRepositoryInterface::class , SectionRepository::class);
         $this->app->bind(DoctorRepositoryInterface::class , DoctorRepository::class);
         $this->app->bind(SingleServiceRepositoryInterface::class , SingleServiceRepository::class);
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
