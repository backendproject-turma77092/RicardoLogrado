<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }

    public function create(Request $request)
    {
        $supplier = Supplier::create($request->all());
        return response()->json($supplier, 201);
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);
        if (!$supplier) {
            return response()->json(['message' => 'Supplier not found'], 404);
        }
        return response()->json($supplier);
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        if (!$supplier) {
            return response()->json(['message' => 'Supplier not found'], 404);
        }

        $supplier->update($request->all());
        return response()->json($supplier);
    }

}