<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Sections\SectionRepository;
use App\Repository\Sections\SectionRepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\Doctors\DoctorRepositoryInterface;

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
