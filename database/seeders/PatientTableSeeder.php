<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;


class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $Patients = new Patient();
        $Patients->email = 'patient@yahoo.com';
        $Patients->Password = Hash::make('123456789');
        $Patients->Date_Birth = '1988-12-01';
        $Patients->Phone = '123456789';
        $Patients->Gender = 1;
        $Patients->name = 'محمد السيد';
        $Patients->Address = 'القاهرة';
        $Patients->save();


    }
}
