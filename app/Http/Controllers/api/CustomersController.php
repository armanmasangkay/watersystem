<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;


class CustomersController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
    public function getAll()
    {
        $customers=Customer::all();

        return response()->json($customers);

    }
}
