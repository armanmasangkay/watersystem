<?php namespace App\Classes\Facades;

use App\Classes\UserAccountNumber as ClassesUserAccountNumber;

class UserAccountNumber{


    public static function generateNew($brgy)
    {
        $accountNumber=new ClassesUserAccountNumber();
        $accountNumber->setBarangay($brgy);
        return $accountNumber->generateNew();
    }
}