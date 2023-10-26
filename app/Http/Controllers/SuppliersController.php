<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    Public function index(){
        $suppliers = Suppliers::all();
        return response()->json($suppliers);
    }

    public function create (Request $request){
        $suppliers = Suppliers::create([
            "name"=>$request->input("name"),
            "phone"=>$request->input("phone"),
            "email"=>$request->input("email"),
            "address"=>$request->input("address"),
            "postal_code"=>$request->input("postal_code"),
            "type"=>$request->input("type"),
            "NIF"=>$request->input("NIF"),
        ]);
        return response()->json($suppliers, 201);
    }
}
