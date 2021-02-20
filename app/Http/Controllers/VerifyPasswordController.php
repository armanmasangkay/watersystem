<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VerifyPasswordController extends Controller
{
    public function verify(Request $request)
    {
        if(!Hash::check($request->password,Auth::user()->password))
        {
            return response()->json([
                'status'=>'unverified'
            ]);
        }

        $customer=Customer::find($request->account_number);
        $customer->delete();
        
        return response()->json([
            'status'=>'verified',
            'message'=>"Customer deleted successfully!"
            
        ]);
        

    }

}
