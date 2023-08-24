<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function productList()
    {
        
        $pro = Product::get();
        $cat = Category::get();
        $manu = Manufacturer::get();
        return view('admin.product-list', compact('pro','cat', 'manu'));
    }

    public function productAdd()
    {
        $pro = Product::get();
        $cat = Category::get();
        $manu = Manufacturer::get();
        return view('admin.product-add', compact('cat', 'pro', 'manu'));
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }


    public function edit($id)
    {
        $cat = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        $manu = Manufacturer::get();
        return view('admin.product-edit', compact('data', 'cat', 'manu'));
    }

    public function save(Request $request)
    {
        $img = $request->productImage1 == "" ? "" : $request->file('productImage1')->getClientOriginalName();
        $p = new Product();
        $p->productID = $request->productID;
        $p->productName = $request->productName;
        $p->productPrice = $request->productPrice;
        $p->productDate = $request->productDate;
        $p->productDetails = $request->productDetails;  
        $p->productImage1 = $img;
        $p->manufacturerID = $request->manufacturer;
        $p->catID = $request->category;
        $p->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id)
    {
        $img = $request->productImage1 == "" ? "" : $request->file('productImage1')->getClientOriginalName();
        Product::where('productID',  $id)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDate' => $request->productDate,
            'productImage1' => $img,
            'manufacturerID' => $request->manufacturer,
            'catID' => $request->category,
        ]);
        Session::flash('success', 'Product updated successfully!');
        return redirect()->back()->with('success', 'Product updated successfully!');
    }

   
}
