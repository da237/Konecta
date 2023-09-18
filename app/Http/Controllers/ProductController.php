<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->name=$request->name;
        $product->reference=$request->reference;
        $product->price=$request->price;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->fecha=$request->fecha;
        $product->save();
        return redirect()->route('product.index')->with('Succes','Product Create');
    }
    public function show(Product $product)
    {
    }
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }
    public function update(Request $request, $product)
    {
        $product = Product::find($product);
        $product->name = $request->name;
        $product->reference=$request->reference;
        $product->price=$request->price;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->fecha=$request->fecha;
        $product->save();
        return redirect()->route('product.index')->with('Succes','Product Update');
    }
    public function destroy(Product $product )
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
