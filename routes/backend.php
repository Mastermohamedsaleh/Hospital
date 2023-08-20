<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\DoctorController;

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





Route::get('Dashboard_admin', [DashboardController::class, 'index']);


 //############################# sections route ##########################################

 Route::resource('sections', SectionController::class);

 //############################# end sections route ######################################

 //############################# doctors route ##########################################

 Route::resource('doctors', DoctorController::class);

 Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
 Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');

 //############################# end doctors route ######################################


