<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.list', compact('products'));
    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->amount = $request->input('amount');
        $product->detail = $request->input('detail');
        $product->category_id = $request->input('category_id');
        $product->save();

        Session::flash('success', 'Tao moi sach thnah cong');
        return redirect()->route('products.index');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));

    }
    public function update(Request $request, $id){
        $product =Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->amount = $request->input('amount');
        $product->detail = $request->input('detail');
        $product->category_id = $request->input('category_id');
        $product->save();

        Session::flash('success', 'Cap nhat thanh cong');
        return redirect()->route('products.index');

    }
    public function show($id){
        $product = Product::findOrFail($id);
        return view('products.show',compact('product'));
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
