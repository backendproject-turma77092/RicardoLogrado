<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function index(){
        $orderDetails = OrderDetails::all();
        return response()->json($orderDetails);
    }

    public function create (Request $request){
        $orderDetails = OrderDetails::create([
            "brand"=>$request->input("brand"),
            "model"=>$request->input("model"),
            "serial_number"=>$request->input("serial_number"),
            "type"=>$request->input("type"),
            "unit_price"=>$request->input("unit_price"),
            "quantity"=>$request->input("quantity"),
            "total_price"=>$request->input("total_price"),
        ]);

        // Calculate the total price
        //$orderDetails->total_price = $orderDetails->unit_price * $orderDetails->quantity;

        return response()->json($orderDetails, 201);
    }
}
