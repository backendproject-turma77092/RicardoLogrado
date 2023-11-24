<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    Public function index(){
        $supplier = Supplier::all();
        return response()->json($supplier);
    }

    public function create (Request $request){
        $supplier = Supplier::create([
            "company_name"=>$request->input("company_name"),
            "phone"=>$request->input("phone"),
            "email"=>$request->input("email"),
            "address"=>$request->input("address"),
            "postal_code"=>$request->input("postal_code"),
            "type"=>$request->input("type"),
            "NIF"=>$request->input("NIF"),
        ]);
        return response()->json($supplier, 201);
    }

    public function show($id)
    {
        // Logic to show a specific supplier
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific supplier
    }


}
