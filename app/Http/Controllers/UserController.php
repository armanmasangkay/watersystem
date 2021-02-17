<?php

namespace App\Http\Controllers;

use App\Models\Systemusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('pages.add-user', ['page' => 'New System User']);
    }

    public function store(Request $request){

        $this->validate($request,[
            'username'=>'required|min:4|unique:App\Models\Systemusers,username',
            'password'=>'required|min:4'
        ]);

        Systemusers::create([
            'username'=>$request->username,
            'password'=>Hash::make($request->password)
        ]);

        return back()->with('success','New user was registered successfully!');
    }
}