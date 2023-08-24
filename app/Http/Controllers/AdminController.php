<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        $admin = Admin::where('adminID', '=', $request->username)->first();
        if ($admin) {
           
            if ($admin->adminPass == $request->password) {
                $request->session()->put('adminID', $admin->adminID);
                $request->session()->put('adminName', $admin->adminFullname);
                $request->session()->put('adminPhoto', $admin->adminPhoto);
                return redirect('admin/index');
            } else {
                return back()->with('fail', 'Password does not match!');
            }
        } else {
            return back()->with('fail', 'Username does not exist!');
        }

    }

    public function logout()
    {
      
     Session::forget('adminID', 'adminName', 'adminPhoto');
     return redirect('admin/login');
     /*  
        $request->session()->forget('adminID');
        $request->session()->forget('adminName');
        $request->session()->forget('adminPhoto');
            
        */    
    }

    
    public function dashboard()
    {
        return view('admin.index');
    }

}