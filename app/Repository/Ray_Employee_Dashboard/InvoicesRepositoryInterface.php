<?php

namespace App\Repository\Ray_Employee_Dashboard;

interface InvoicesRepositoryInterface
{
    public function index();
    public function completed_invoices();
    public function edit($id);
    public function update($request,$id);
}