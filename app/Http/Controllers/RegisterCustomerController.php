<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{

    protected $accNumberPrefix="MWS_";


    private function extractBarangay()
    {  
        $file=$this->readBarangayFile();
        $barangays=[];
        while(!feof($file)) {
            $barangay=explode("_",fgets($file));
           
            array_push($barangays,$barangay[1]);
        }
        fclose($file);
        return $barangays;
    }

    protected function readBarangayFile()
    {
        $file=fopen(storage_path('files/barangays.txt'),'r');
       
        return $file;
    }

    protected function getBrgyCode($barangayName)
    {
        $file=$this->readBarangayFile();

       
        while(!feof($file)) {
            $barangay=explode("_",fgets($file));
           
            if(trim($barangay[1])==$barangayName)
            {
                
                fclose($file);
                return $barangay[0];
            }  
        }
        fclose($file);
        return null;

    }


    protected function generateNewAccountNumber($barangayName)
    {
    
        $dateToday=Carbon::now()->format('Y');
        $count=1;
      
       
        $brgyCode=$this->getBrgyCode($barangayName);
        $tempAccNumber="";
    
        do{
            $customerCount=str_pad(strval($count),3,"0",STR_PAD_LEFT);
            $tempAccNumber=$brgyCode.'-'.$dateToday.'-'.$customerCount;
            $customer=Customer::where('account_number',$tempAccNumber)->get();
            $count++;

        }while($customer->count()>0);
        return $tempAccNumber;
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
        $accountNumber=$this->generateNewAccountNumber($request->barangay);
      
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
