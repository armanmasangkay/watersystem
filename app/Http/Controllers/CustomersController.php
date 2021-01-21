<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function getAll()
    {
        $customers=Customer::all();

        return response()->json($customers);

    }
}
