<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutUserController extends Controller
{
    public function logout()
    {
        auth('api')->logout();

        return response()->json([
            'status'=>'success',
            'message'=>'Logged out successfully!'
        ]);
    }
}
