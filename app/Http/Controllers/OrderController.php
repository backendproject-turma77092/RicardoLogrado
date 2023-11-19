<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function create(Request $request)
    {
        $order = Order::create($request->only(['postal_code', 'total_price', 'order_date', 'shipped_date']));

        foreach ($request->input('products', []) as $product) {
            OrderProduct::create([
                'OrderID' => $order->id,
                'ProductID' => $product['ProductID'],
                'quantity' => $product['quantity'],
            ]);
        }

        return response()->json($order->load('orderProducts.product'), 201);
    }

    public function show($id)
    {
        $order = Order::with('orderProducts.product')->find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }
        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->update($request->all());
        return response()->json($order);
    }

}
