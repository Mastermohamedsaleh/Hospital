<?php

namespace App\Repository\Ray_Employee_Dashboard;

use App\Repository\Ray_Employee_Dashboard\InvoicesRepositoryInterface;
use App\Models\Ray;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;

class InvoicesRepository implements InvoicesRepositoryInterface
{
    use UploadTrait;

   public function index()
   {
    $invoices = Ray::where('case',0)->get();
       return view('Dashboard.dashboard_RayEmployee.invoices.index',compact('invoices'));
   }


   public function completed_invoices()
   {
       $invoices = Ray::where('case',1)->get();
       return view('Dashboard.dashboard_RayEmployee.invoices.completed_invoices',compact('invoices'));
   }

   public function edit($id)
   {
       $invoice = Ray::findorFail($id);
       return view('Dashboard.dashboard_RayEmployee.invoices.add_diagnosis',compact('invoice'));
   }

   public function update($request, $id)
   {
       $invoice = Ray::findorFail($id);

       $invoice->update([
           'employee_id'=> auth()->user()->id,
           'description_employee'=> $request->description_employee,
           'case'=> 1,
       ]);

    
       if( $request->hasFile( 'photos' ) ) {

        foreach ($request->photos as $photo) {
            //Upload img
            $this->verifyAndStoreImageForeach($photo,'Rays','upload_image',$invoice->id,'App\Models\Ray');
        }

      }
      session()->flash('edit');
      return redirect()->route('invoices_ray_employee.index');

   }

}