<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\File;


class CastomerController extends Controller
{
    
    public function index()
    {
        $customer = Customer::latest()->paginate(10);
        return view('customer.index', compact('customer')); 
    }

   
    public function create()
    {
        return view('customer.create');
       
    }

    
    public function store(Request $request)
    {
        // Validation
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:customers,email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'profile_image' => ['nullable', 'image' , 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        //image upload
        $uploadpath = public_path('/uploads/customers/');
        if (!File::exists($uploadpath)) 
        {
            File::makeDirectory($uploadpath, 0755, true);
        }
        if ($request->hasFile('profile_image')) 
        {
          $file = $request->file('profile_image');
          $filename = 'cust_'. time() . '_' .uniqid(). '.' .$file->getClientOriginalExtension();
            $file->move($uploadpath, $filename);
            $data['profile_image'] =  $filename;
        }
        Customer::create($data);
        return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
        
    }

   
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

   
    public function edit(Customer $customer)
    {
       return view('customer.edit', compact('customer'));
    }

   
    public function update(Request $request, Customer $customer)
    {
        //update validation
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:customers,email,'.$customer->id],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'profile_image' => ['nullable', 'image' , 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        //image upload
        $uploadpath = public_path('/uploads/customers/');
        if (!File::exists($uploadpath)) 
        {
            File::makeDirectory($uploadpath, 0755, true);   
        }
        if ($request->hasFile('profile_image')) 
        {
            //delete old image
            if ($customer->profile_image && File::exists(public_path($customer->profile_image))) 
            {
                File::delete(public_path($customer->profile_image));
            }
          $file = $request->file('profile_image');
          $filename = 'cust_'. time() . '_' .uniqid(). '.' .$file->getClientOriginalExtension();
            $file->move($uploadpath, $filename);
            $data['profile_image'] =  '/uploads/customers/'.$filename;
        }
        $customer->update($data);
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
    }

    
    public function destroy(Customer $customer)
    {
        if ($customer->profile_image && File::exists(public_path($customer->profile_image))) 
        {
            File::delete(public_path($customer->profile_image));
        }
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
    }
}
