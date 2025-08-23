<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CcustomerControler extends Controller
{
    //
    public function showCustomer(){
        return view('pages.customer');
    }
    public function store(Request $request){
        $validate = $request->validate(([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|numeric',
        ]));
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('success', 'Customer information saved successfully!');
        

    }

       

       
  }