<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\RegisterCustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Claims\Custom;

class ViewCustomerController extends Controller
{
    public function index()
    {
        $customers=Customer::paginate(15);
        
        return view('pages.customer-lists', [
            'page' => 'Client Accounts',
            'customers'=>$customers
        ]);
    }

    public function store()
    {


    }
}
