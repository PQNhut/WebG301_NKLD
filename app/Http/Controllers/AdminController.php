<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginProcess(Request $request)
    {
       $admin= Admin::where('adminID', '=', $request->username)->first();
       if($admin) {
        if($admin->adminPass ==$request->password){
            $request->session()->put('adminID', $admin->adminID);
            $request->session()->put('adminName', $admin->adminFullname);
            $request->session()->put('adminPhoto', $admin->adminPhoto);
            return redirect('admin/index');
        } else{
            return back()->with('fail', 'Password not match!');
        }
       } else{
        return back()->with('fail', 'Username does not existed!');
       }
    }

    public function logout()
    {
        if(Session::has('adminID'))
            Session::pull('adminID');
        if(Session::has('adminName'))
            Session::pull('adminName');
        if(Session::has('adminPhoto'))
            Session::pull('adminPhoto');
        return redirect('admin/login');
    }
    public function dashboard()
    {
        return view('admin.index');
    }

    public function productList()
    {
        $pro = Product::get();
        return view('admin.product-list', compact( 'pro'));
    }

    public function productAdd()
    {
        $cat = Category::get();
        return view('admin.product-add', compact( 'cat'));
    }
}