<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeController;


/*
|--------------------------------------------------------------------------
| backend  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard/user', function () {
    return view('Dashboard.User.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard/admin', function () {
    return view('Dashboard.Admin.dashboard');
})->middleware(['auth:admin'])->name('dashboard.admin');



//################################ dashboard admin ########################################




Route::get('Dashboard_admin', [DashboardController::class, 'index']);


 //############################# sections route ##########################################

 Route::resource('sections', SectionController::class);

 //############################# end sections route ######################################

 //############################# doctors route ##########################################

 Route::resource('doctors', DoctorController::class);

 Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
 Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');

 //############################# end doctors route ######################################


 Route::resource('Service', SingleServiceController::class);



// Livewire
Route::view('Add_GroupServices','livewire.GroupServices.include_create')->name('Add_GroupServices');


Route::resource('insurance', InsuranceController::class);


Route::resource('Ambulance', AmbulanceController::class);


Route::resource('Patients', PatientController::class);





//############################# single_invoices route ##########################################

Route::view('single_invoices','livewire.single_invoices.index')->name('single_invoices');

Route::view('Print_single_invoices','livewire.single_invoices.print')->name('Print_single_invoices');

//############################# end single_invoices route ######################################


//############################# Receipt route ##########################################

Route::resource('Receipt', ReceiptAccountController::class);

//############################# end Receipt route ######################################






       //############################# RayEmployee route ##########################################

       Route::resource('ray_employee', RayEmployeeController::class);

       //############################# end RayEmployee route ######################################



require __DIR__.'/auth.php';
