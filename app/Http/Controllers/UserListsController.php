<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListsController extends Controller
{
    public function index(){
        return view('pages.view-users', ['page' => 'System Users']);
    }

    public function store(){

    }
}