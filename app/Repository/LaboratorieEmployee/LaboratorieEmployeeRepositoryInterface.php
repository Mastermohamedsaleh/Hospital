<?php

namespace App\Repository\LaboratorieEmployee;

interface LaboratorieEmployeeRepositoryInterface
{
    public function index();

    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}