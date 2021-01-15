<?php

namespace App\Http\Controllers;

use App\Models\RegisterCustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCustomerController extends Controller
{
    public function index(){
        return view('pages.register-customer', ['page' => 'Client Account Registration']);
    }

    public function store(){

    }
}
