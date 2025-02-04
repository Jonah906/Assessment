<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Product::all(), 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0', 
            'stock' => 'required|integer|min:1', 
        ]));

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json($product, 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0', 
            'stock' => 'required|integer|min:1', 
        ]));

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
