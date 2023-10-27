<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = Orders::all();
        return response()->json($orders);
    }

    public function create (Request $request){
        $orders = Orders::create([
            "brand"=>$request->input("brand"),
            "model"=>$request->input("model"),
            "serial_number"=>$request->input("serial_number"),
            "suplier"=>$request->input("suplier"),
            "type"=>$request->input("type"),
            "unit_price"=>$request->input("unit_price"),
            "quantity"=>$request->input("quantity"),
            "total_price"=>$request->input("total_price"),
            "order_date"=>$request->input("order_date"),
            "shipped_date"=>$request->input("shipped_date"),
        ]);

        return response()->json($orders, 201);
    }
}
