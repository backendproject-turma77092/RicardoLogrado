<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderProducts.product')->get();
        return response()->json($orders);
    }

    public function create(Request $request)
    {
        DB::beginTransaction();

        try {
            $order = Order::create($request->only(['postal_code', 'order_date', 'shipped_date']));

            foreach ($request->input('products', []) as $product) {
                $productExists = Product::find($product['ProductID']);
                if (!$productExists) {
                    throw new \Exception("Product with ID {$product['ProductID']} not found.", 404);
                }
                OrderProduct::create([
                    'OrderID' => $order->id,
                    'ProductID' => $product['ProductID'],
                    'quantity' => $product['quantity'],
                ]);
            }

            DB::commit();

            $order = $order->load('orderProducts.product');
            return response()->json($order, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            $statusCode = is_int($e->getCode()) ? $e->getCode() : 500;
            return response()->json(['error' => $e->getMessage()], $statusCode);
        }
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