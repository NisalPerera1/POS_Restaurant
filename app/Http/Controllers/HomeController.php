<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $customer = session('customer');

        return view('welcome', compact('customers','customer'));
    }}
