<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return response(Product::all())->header('Access-Control-Allow-Origin', '*');
    }
 
    public function show(Product $product)
    {
        return response($product)->header('Access-Control-Allow-Origin', '*');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'integer',
            'quantity' => 'integer',
            'size' => 'max:255',
            'code' => 'required|integer|unique:products',
        ]);
        $product = Product::create($request->all());
 
        return response()->json($product, 201);
    }
 
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
 
        return response($product)->header('Access-Control-Allow-Origin', '*');
    }
 
    public function delete(Product $product)
    {
        $product->delete();
 
        return response()->json(null, 204);
    }
}
