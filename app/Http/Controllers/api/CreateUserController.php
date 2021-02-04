<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUserController extends Controller
{
    public function create(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|size:5',
        ]);
    
        if($validator->fails()){
           
            return response()->json([
                'status'=>'error',
                'errors'=>$validator->errors()
            ]);
        }
    
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
    
        return response()->json([
            'status'=>'success',
            'message'=>'Admin created successfully!'
        ]);
    }
}
