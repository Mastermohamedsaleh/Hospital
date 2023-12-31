<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginAdminRequest;
use App\Providers\RouteServiceProvider;

class AdminController extends Controller
{
    
    public function index()
    {
        //
    }

  
    public function create()
    {
        //
    }

    
    public function store(LoginAdminRequest $request)
    {
        if($request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }

        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);
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
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
