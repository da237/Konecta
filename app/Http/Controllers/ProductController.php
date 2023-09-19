<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }
    public function create():View
    {
        return view('product.create');
    }
    public function store( ProductRequest $request):RedirectResponse
    {
        $product = new Product;
        $product->name=$request->name;
        $product->reference=$request->reference;
        $product->price=$request->price;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->fecha=$request->fecha;
        $product->save();
        return redirect()->route('product.index');
    }
    public function show(Product $product)
    {
    }
    public function edit(Product $product):View
    {
        return view('product.edit',compact('product'));
    }
    public function update(ProductRequest $request, $product):RedirectResponse
    {
        $product = Product::find($product);
        $product->name = $request->name;
        $product->reference=$request->reference;
        $product->price=$request->price;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->fecha=$request->fecha;
        $product->save();
        return redirect()->route('product.index');
    }
    public function destroy(Product $product ):RedirectResponse
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
