<?php namespace App\Classes;

use App\Classes\Interfaces\IAccountNumber;
use App\Classes\Interfaces\IUserAccountNumber;
use App\Models\Customer;
use Carbon\Carbon;

class UserAccountNumber implements IUserAccountNumber{

    private string $barangay;

    protected function getBrgyCode($barangayName)
    {
        $file=BarangayFile::get();

       
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

    public function setBarangay($brgy):void
    {
        $this->barangay=$brgy;
    }

    public function generateNew():string
    {
        return $this->generateNewAccountNumber($this->barangay);
    }

}