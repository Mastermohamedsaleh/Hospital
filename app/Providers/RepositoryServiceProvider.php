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
use App\Repository\LaboratorieEmployee\LaboratorieEmployeeRepository;
use App\Repository\LaboratorieEmployee\LaboratorieEmployeeRepositoryInterface;

use App\Repository\RayEmployee\RayEmployeeRepository;
use App\Repository\RayEmployee\RayEmployeeRepositoryInterface;



use App\Repository\doctor_dashboard\DiagnosisRepository;
use App\Repository\doctor_dashboard\DiagnosisRepositoryInterface;


use App\Repository\doctor_dashboard\RaysRepository;
use App\Repository\doctor_dashboard\RaysRepositoryInterface;

use App\Repository\doctor_dashboard\LaboratoriesRepository;
use App\Repository\doctor_dashboard\LaboratoriesRepositoryInterface;


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
         $this->app->bind(RayEmployeeRepositoryInterface::class, RayEmployeeRepository::class);
         $this->app->bind(LaboratorieEmployeeRepositoryInterface::class, LaboratorieEmployeeRepository::class);
        //  doctor
        $this->app->bind(DiagnosisRepositoryInterface::class, DiagnosisRepository::class);
        $this->app->bind(RaysRepositoryInterface::class, RaysRepository::class);
        $this->app->bind(LaboratoriesRepositoryInterface::class, LaboratoriesRepository::class);



              //Dashboard_Ray_Employee
              $this->app->bind('App\Repository\Ray_Employee_Dashboard\InvoicesRepositoryInterface',
              'App\Repository\Ray_Employee_Dashboard\InvoicesRepository');

                  //Dashboard_Laboratorie_Employee
        $this->app->bind('App\Interfaces\Dashboard_Laboratorie_Employee\InvoicesRepositoryInterface',
        'App\Repository\Dashboard_Laboratorie_Employee\InvoicesRepository');

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
