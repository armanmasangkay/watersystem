<?php

namespace App\Http\Controllers;

use App\Models\Systemusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListsController extends Controller
{

    public function index(){
        $users = Systemusers::get();
        return view('pages.view-users', ['page' => 'System Users', 'system_users' => $users]);
    }

    public function store(){

    }
}