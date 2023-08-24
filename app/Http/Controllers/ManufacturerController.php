<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function manufacturerList()
    {
        $manufacturers = Manufacturer::get();
        return view('admin.manufacturer-list', compact('manufacturers'));
    }

    public function manufacturerAdd()
    {
        return view('admin.manufacturer-add');
    }

    public function save(Request $request)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->manufacturerID = $request->manufacturerID;
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->save();

        return redirect()->back()->with('success', 'Manufacturer added successfully!');
    }

    public function update(Request $request)
    {
        Manufacturer::where('manufacturerID', $request->id)->update([
            'manufacturerName' => $request->manufacturerName
        ]);

        return redirect()->back()->with('success', 'Manufacturer updated successfully!');
    }
}