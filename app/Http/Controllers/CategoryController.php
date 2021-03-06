<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        return view('categories.category', compact('categories'));
    }

    public function filterByCategory($id)
    {
        $products = Category::findOrFail($id)->products;
//        dd($category->products);
        return view('products.products', compact('products', 'categories'));
    }
}
