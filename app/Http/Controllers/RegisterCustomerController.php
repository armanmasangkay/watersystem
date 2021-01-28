<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{


    protected $accNumberPrefix="MWS_";


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

    public function index()
    {
        return view('pages.register-customer', ['page' => 'Client Account Registration']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'civil_status'=>'required',
            'sitio_purok'=>'required',
            'barangay'=>'required',
            'contact'=>'required|numeric',
            'connection_type'=>'required',
            'connection_status'=>'required',            
        ]);

        Customer::create([
            'account_number'=>$this->generateNewAccountNumber(),
            'firstname'=>$request->first_name,
            'middlename'=>$request->middle_name,
            'lastname'=>$request->last_name,
            'civil_status'=>$request->civil_status,
            'purok'=>$request->sitio_purok,
            'brgy'=>$request->barangay,
            'contact_number'=>$request->contact,
            'connection_type'=>$request->connection_type,
            'connection_status'=>$request->connection_status
        ]);

    }
}
