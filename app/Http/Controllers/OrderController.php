<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    Public function index(){
        $order = Order::all();
        return response()->json($order);
    }

    public function create (Request $request){
        $order = Order::create([
            "OrderID"=>$request->input("OrderID"),
            "postal_code"=>$request->input("postal_code"),
            "total_price"=>$request->input("total_price"),
            "order_date"=>$request->input("order_date"),
            "shipped_date"=>$request->input("shipped_date"),
            // "customer_CustomerID"=>$request->input("customer_CustomerID"),
        ]);
        return response()->json($order, 201);
    }

    public function show($id)
    {
        // Logic to show a specific order
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific order
    }

}
