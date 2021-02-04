<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function login()
    {
        $credentials=request()->only(['email','password']);

        $token=auth('api')->attempt($credentials);

        if(!$token){
            return response()->json([
                'status'=>'error',
                'message'=>'Unauthorized, not allowed'
            ],401);
        }

        return response()->json([
            'status'=>'error',
            'access-token'=>$token,
        ]);

    }
}
