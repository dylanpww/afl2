<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $products = Product::where('nama', 'like', '%' . $request->search . '%')->paginate(5);
        } else {
            $products = Product::paginate(8);
        }
        $categories = Category::all();
        return view('category', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('productDetail', compact('product'));
    }

    public function showAllProduct()
    {
        $products = Product::all();
        return view('addAndEditProduct', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        } else {
            $validated['image'] = $product->image;
        }

        $product->update($validated);

        return redirect('/addAndEditProduct')
            ->with('success', 'Product updated successfully!');
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('editProduct', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.showAllProduct')
            ->with('success', 'Product deleted successfully!');
    }

    public function create()
    {
        $categories = Category::all();
        return view('formAddProduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = $request->file('image')->store('products', 'public');
        $validated['image'] = '/storage/' . $path;

        Product::create($validated);

        return redirect('addAndEditProduct')->with('success', 'Product added successfully!');
    }
}
