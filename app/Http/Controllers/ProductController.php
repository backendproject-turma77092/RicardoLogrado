<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){
        $product = Product::all();
        return response()->json($product);
    }

    public function create (Request $request){
        $product = Product::create([
            "ProductID"=>$request->input("ProductID"),
            "brand"=>$request->input("brand"),
            "model"=>$request->input("model"),
            "serial_number"=>$request->input("serial_number"),
            "type"=>$request->input("type"),
            "supplier"=>$request->input("supplier"),
            "unit_price"=>$request->input("unit_price"),
            "units_in_stock"=>$request->input("units_in_stock"),
            "units_on_order"=>$request->input("units_on_order"),
            "discontinued"=>$request->input("discontinued")
        ]);
        return response()->json($product, 201);
    }

    public function show($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

}
