<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TransactionModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function index()
    {
        return view('pages.new-transaction', ['page' => 'New Client Transaction']);
    }

    public function store()
    {

    }

    private function fetchCustomerById($id)
    {
        try{
            $customer=Customer::findOrFail($id);
            return $customer;
        }catch(ModelNotFoundException $e){
            return null;
        }
    }

    public function search(Request $request)
    {
        $customerId=$request->customerId;
        $customer= $this->fetchCustomerById($customerId);

        if(!$customer){
            return back()->with([
                'status'=>'error',
                'message'=>'Invalid customer ID'
            ]);
        }

        return back()->with([
            'status'=>'success',
            'customer'=>$customer,

        ]);
      
    }
}