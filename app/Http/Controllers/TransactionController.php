<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function index(){
        return view('pages.new-transaction', ['page' => 'New Client Transaction']);
    }

    public function store(){

    }
}