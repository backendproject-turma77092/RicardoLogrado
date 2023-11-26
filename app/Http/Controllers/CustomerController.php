<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function create (Request $request){
        $customer = Customer::create([
            "CustomerID"=>$request->input("CustomerID"),
            "name"=>$request->input("name"),
            "phone"=>$request->input("phone"),
            "email"=>$request->input("email"),
            "address"=>$request->input("address"),
            "postal_code"=>$request->input("postal_code"),
            "NIF"=>$request->input("NIF"),
        ]);
        return response()->json($customer, 201);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
    
        if ($customer) {
            return response()->json($customer);
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }
    

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
    
        if ($customer) {
            $customer->update([
                "CustomerID" => $request->input("CustomerID", $customer->CustomerID),
                "name" => $request->input("name", $customer->name),
                "phone" => $request->input("phone", $customer->phone),
                "email" => $request->input("email", $customer->email),
                "address" => $request->input("address", $customer->address),
                "postal_code" => $request->input("postal_code", $customer->postal_code),
                "NIF" => $request->input("NIF", $customer->NIF),
            ]);
    
            return response()->json($customer);
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }
    

}

