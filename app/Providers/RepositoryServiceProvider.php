<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Sections\SectionRepository;
use App\Repository\Sections\SectionRepositoryInterface;
use App\Repository\Doctors\DoctorRepository;
use App\Repository\Doctors\DoctorRepositoryInterface;
use App\Repository\Services\SingleServiceRepository;
use App\Repository\Services\SingleServiceRepositoryInterface;

use App\Repository\Insurances\insuranceRepository;
use App\Repository\Insurances\insuranceRepositoryInterface;
use App\Repository\Ambulances\AmbulanceRepository;
use App\Repository\Ambulances\AmbulanceRepositoryInterface;
use App\Repository\Patients\PatientRepository;
use App\Repository\Patients\PatientRepositoryInterface;
use App\Repository\Receipts\ReceiptRepository;
use App\Repository\Receipts\ReceiptRepositoryInterface;



use App\Repository\doctor_dashboard\DiagnosisRepository;
use App\Repository\doctor_dashboard\DiagnosisRepositoryInterface;

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
         $this->app->bind(insuranceRepositoryInterface::class , insuranceRepository::class);
         $this->app->bind(AmbulanceRepositoryInterface::class , AmbulanceRepository::class);
         $this->app->bind(PatientRepositoryInterface::class , PatientRepository::class);
         $this->app->bind(ReceiptRepositoryInterface::class , ReceiptRepository::class);

        //  doctor
        $this->app->bind(DiagnosisRepositoryInterface::class, DiagnosisRepository::class);
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
