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
        $orders = Order::all();
        return response()->json($orders);
    }


public function create(Request $request)
{
    // Iniciando uma transação do banco de dados
    DB::beginTransaction();

    try {
        // Validação dos dados do pedido (opcional, mas recomendado)
        // $request->validate([...]);

        // Criação do pedido
        $order = Order::create($request->only(['postal_code', 'total_price', 'order_date', 'shipped_date']));

        // Processamento de cada produto
        foreach ($request->input('products', []) as $product) {
            // Verifica se o produto existe
            $productExists = Product::find($product['ProductID']);
            if (!$productExists) {
                throw new \Exception("Product with ID {$product['ProductID']} not found.", 404);
            }

            // Criação de OrderProduct
            OrderProduct::create([
                'OrderID' => $order->id,
                'ProductID' => $product['ProductID'],
                'quantity' => $product['quantity'],
            ]);
        }

        // Commit da transação
        DB::commit();

        return response()->json($order->load('orderProducts.product'), 201);
    } catch (\Exception $e) {
        // Revertendo mudanças no banco de dados
        DB::rollBack();

        // Log do erro
        //Log::error($e->getMessage());

        // Resposta de erro
        return response()->json(['error' => $e->getMessage()], $e->getCode() ?: 500);
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
