<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;


class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }


    public function register()
    {
        return view('customer.registration');
    }

    public function processRegister(Request $request)
{
    $cus = new Customer();
    $cus->customerID = $request->id;
    $cus->customerEmail = $request->email;
    $cus->customerPassword = Hash::make($request->password);
    $cus->customerName = $request->name;
    $cus->customerAddress = $request->address;
    $cus->customerPhone = $request->phone;
    $cus->customerPhoto = $request->photo;
    $res = $cus->save();
    if ($res) {
        return view('customer.login');
    } else {
        return back()->with('fail', 'Something wrong! Please enter again!');
    }
}

    public function login()
    {
        return view('customer.login');
    }

    public function loginProcess(Request $request)
{
    $cus = Customer::where('customerEmail', '=', $request->email)->first();
    if ($cus) {
        if (Hash::check($request->password, $cus->customerPassword  )) {
            $request->session()->put('cusEmail', $cus->customerEmail);
            $request->session()->put('cusName', $cus->customerName);
            $request->session()->put('cusPhot', $cus->customerPhoto);
            $request->session()->put('cusID', $cus->customerID);
            return redirect('customer/index');
        } else {
            return back()->with('fail', 'Password does not match');
        }
    } else {
        return back()->with('fail', 'Username or email does not exist!');
    }
}

    public function logout()
    {
        Session::pull('cusEmail');
        Session::pull('cusName');
        Session::pull('cusPhoto');
        return view('customer.index');
    }

    public function products()
    {
        $pro = Product::get();
        return view('customer.product', compact('pro'));
    }

    public function profile()
    {
        $customer = Customer::where('customerID', '=', session('cusID'))->first();
        return view('customer.profile', compact('customer'));
    }

    public function Update(Request $request)
    {
        Customer::where('customerID', '=', $request->id)->update([
            'customerEmail' => $request->email,
            'customerName' => $request->name,
            'customerAddress' => $request->address,
            'customerPhone' => $request->phone,
            'customerPhoto' => $request->photo
        ]);

        return redirect('customer/index');
        //return redirect()->back()->with('success', 'Customer updated successfully!');
    }
    public function customerList()
    {
        $customers = Customer::get();
        return view('admin.customer-list', compact('customers'));
    }
    public function delete($id)
    {
        Customer::where('customerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customer successfully deleted');
    }
}
