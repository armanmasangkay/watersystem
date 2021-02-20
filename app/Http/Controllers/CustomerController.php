<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function delete(Request $request)
    {
        return response()->json(['status'=>'verified']);
    }
}
