<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Category::get();
        return view('admin.category-list', compact('categories'));
    }

    public function categoryAdd()
    {
        return view('admin.category-add');
    }

    public function save(Request $request)
    {
        $category = new Category();
        $category->categoryID = $request->categoryID;
        $category->categoryName = $request->categoryName;
        $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function update(Request $request)
    {
        Category::where('categoryID', $request->id)->update([
            'categoryName' => $request->categoryName
        ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }
}
