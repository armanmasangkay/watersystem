<?php

namespace App\Http\Controllers;

use App\Models\RegisterCustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ViewCustomerController extends Controller
{
    public function index(){
        return view('pages.customer-lists', ['page' => 'Client Account Viewing']);
    }

    public function store(){

    }
}
