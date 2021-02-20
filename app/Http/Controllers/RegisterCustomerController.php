<?php

namespace App\Http\Controllers;

use App\Classes\BarangayFile;
use App\Classes\Facades\UserAccountNumber;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{
    
    private function extractBarangay()
    {  
        $file=BarangayFile::get();
        $barangays=[];
        while(!feof($file)) {
            $barangay=explode("_",fgets($file));
           
            array_push($barangays,$barangay[1]);
        }
        fclose($file);
        return $barangays;
    }


    public function index()
    {
      
        $barangays=$this->extractBarangay();

        return view('pages.register-customer', [
            'page' => 'Client Account Registration',
            'barangays'=>$barangays
        ]);
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
            'connection_type_other'=>'required_if:connection_type,other',
            'connection_status_other'=>'required_if:connection_status,other'       
        ]);

        $connectionType=$request->connection_type;
        $connectionStatus=$request->connection_status;

        if($connectionType==="other"){
            $connectionType=$request->connection_type_other;
        }

        if($connectionStatus==="other"){
            $connectionStatus=$request->connection_status_other;
        }
        $accountNumber=UserAccountNumber::generateNew($request->barangay);
        
        Customer::create([
            'account_number'=>$accountNumber,
            'firstname'=>$request->first_name,
            'middlename'=>$request->middle_name,
            'lastname'=>$request->last_name,
            'civil_status'=>$request->civil_status,
            'purok'=>$request->sitio_purok,
            'brgy'=>$request->barangay,
            'contact_number'=>$request->contact,
            'connection_type'=>$connectionType,
            'connection_status'=>$connectionStatus
        ]);

        $customerFullname=$request->first_name .' '.$request->last_name;

        return back()->with('success','Account number of '.   $customerFullname . ' is ('.$accountNumber.')');

    }
}
