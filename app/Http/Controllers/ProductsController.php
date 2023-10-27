<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return response()->json($products);
    }

    public function create (Request $request){
        $products = Products::create([
            "brand"=>$request->input("brand"),
            "model"=>$request->input("model"),
            "serial_number"=>$request->input("serial_number"),
            "type"=>$request->input("type"),
            "unit_price"=>$request->input("unit_price")
        ]);

        return response()->json($products, 201);
    }
}
