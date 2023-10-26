<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    Public function index(){
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function create (Request $request){
        $customer = Customer::create([
            "name"=>$request->input("name"),
            "phone"=>$request->input("phone"),
            "email"=>$request->input("email"),
            "address"=>$request->input("address"),
            "postal code"=>$request->input("postal code"),
            "NIF"=>$request->input("NIF"),
        ]);
        return response()->json($customer, 201);
    }
}
