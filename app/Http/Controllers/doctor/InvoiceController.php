<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Single_invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
   
    public function index()
    {
        $invoices = Single_invoice::where('doctor_id',  Auth::user()->id)->get();
        return view('Dashboard.doctor.invoices.index',compact('invoices'));
       
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
