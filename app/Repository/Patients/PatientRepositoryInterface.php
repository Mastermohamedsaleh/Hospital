<?php


namespace App\Repository\Patients;


interface PatientRepositoryInterface
{
    // Get All Patients
    public function index();
    // Create New Patients
    public function create();
    // Detalis
    public function Show($id);
    // Store new Patients
    public function store($request);
    // edit Patients
    public function edit($id);
    // update Patients
    public function update($request);
    // Deleted Patients
    public function destroy($request);
}