<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('suppliers')->get();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());

        if ($request->has('supplier_ids')) {
            $product->suppliers()->attach($request->input('supplier_ids'));
        }

        return response()->json($product->load('suppliers'), 201);
    }

    public function show($id)
    {
        $product = Product::with('suppliers')->find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update($request->all());

        if ($request->has('supplier_ids')) {
            $product->suppliers()->sync($request->input('supplier_ids'));
        }

        return response()->json($product->load('suppliers'));
    }
}
