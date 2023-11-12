<?php

namespace App\Repository\doctor_dashboard;

interface DiagnosisRepositoryInterface
{
    public function store($request);

    public function show($id);
}