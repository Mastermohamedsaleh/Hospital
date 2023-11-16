<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Single_invoice;
use App\Models\Ray;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
   
    public function index()
    {
        $invoices = Single_invoice::where('doctor_id',  Auth::user()->id)->where('invoice_status',1)->get();
        return view('Dashboard.doctor.invoices.index',compact('invoices'));
       
    }


    // قائمة المراجعات
    public function reviewInvoices()
    {
        $invoices = Single_invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 2)->get();
        return view('Dashboard.Doctor.invoices.review_invoices', compact('invoices'));
    }

    // قائمة الفواتير المكتملة
    public function completedInvoices()

    {
        $invoices = Single_invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 3)->get();
        return view('Dashboard.Doctor.invoices.completed_invoices', compact('invoices'));
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
        $rays = Ray::findorFail($id);
        if($rays->doctor_id !=auth()->user()->id){
        //   return  abort(404);
            return redirect()->route('404');
        }
        return view('Dashboard.Doctor.invoices.view_rays', compact('rays'));
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
