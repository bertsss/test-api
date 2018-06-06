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
        return response(Product::all());
    }

    public function show(Product $product)
    {
        return response($product);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response($product);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response($product);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response(Product::all());
    }
}
