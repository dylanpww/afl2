<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        return view('categoryDetail', compact('category', 'products'));
    }

    public function showAllCategory()
    {
        $categories = Category::all();
        return view('addAndEditCategory', compact('categories'));
    }

    public function create()
    {
        return view('formAddCategory');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        $path = $request->file('image')->store('categories', 'public');
        $validated['image'] = '/storage/' . $path;
    

    Category::create($validated);

    return redirect()->route('category.index');
}





    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('editCategory', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
            $validated['image'] = '/storage/' . $path;
        } else {
            $validated['image'] = $category->image;
        }

        $category->update($validated);

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
