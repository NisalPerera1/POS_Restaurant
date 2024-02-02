<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $customer = session('customer');

        return view('welcome', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:customers,email',
        'contact_number' => 'nullable|string',
    ]);

    $customer = Customer::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'contact_number' => $request->input('contact_number'),
    ]);

    // Store customer data in the session
    session(['customer' => $customer]);

    return redirect()->route('welcome');
}


    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'contact_number' => 'nullable|string',
        ]);

        $customer->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
        ]);

        return response()->json(['message' => 'Customer updated successfully', 'customer' => $customer]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json(['message' => 'Customer deleted successfully']);
    }
}
