<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    protected function generateNewAccountNumber()
    {
        $dateToday=Carbon::now()->format('Ymd');
        $count=0;
        $tempAccNumber="";
        do{

            
            $tempAccNumber=$this->accNumberPrefix.$dateToday.$count;
            $customer=Customer::where('account_number',$tempAccNumber)->get();
            $count++;

        }while($customer->count()>0);
        return $tempAccNumber;
    }


    public function store(Request $request)
    {
     
      $validator=Validator::make($request->all(),[
        'firstname'=>'required',
        'lastname'=>'required',
        'civil_status'=>'required',
        'purok'=>'required',
        'brgy'=>'required',
        'contact_number'=>'required|numeric',
        'connection_type'=>'required',
        'connection_status'=>'required',
      ]);

      if($validator->fails()){
        return response()->json(
            [
                'status'=>'error',
                'errors'=>$validator->messages()
                
            ]);
      }

        Customer::create([
            'account_number'=>$this->generateNewAccountNumber(),
            'firstname'=>$request->firstname,
            'middlename'=>$request->middlename,
            'lastname'=>$request->lastname,
            'civil_status'=>$request->civil_status,
            'purok'=>$request->purok,
            'brgy'=>$request->brgy,
            'contact_number'=>$request->contact_number,
            'connection_type'=>$request->connection_type,
            'connection_status'=>$request->connection_status
        ]);

        return response()->json([
            'status'=>'success',
            'message'=>'Customer was successfully registered to the system'
        ]);


    }
}
