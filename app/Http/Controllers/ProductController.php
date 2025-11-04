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
        return view('category', compact ('products', 'categories'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('productDetail', compact('product'));
    }
}
