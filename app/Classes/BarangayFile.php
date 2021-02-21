<?php namespace App\Classes;

class BarangayFile{

    public static function get()
    {
        $file=fopen(storage_path('files/barangays.txt'),'r');
        return $file;
    }

    private static function getBarangays()
    {
        $file=BarangayFile::get();
        $barangays=[];
        while(!feof($file)) {
            $barangay=explode("_",fgets($file));
           
            array_push($barangays,trim($barangay[1]));
        }
        fclose($file);

        return $barangays;
    }

    public static function getRandomBarangay()
    {
       $barangays=BarangayFile::getBarangays();
       $arrSize=count($barangays);
       return $barangays[random_int(0,$arrSize-1)];
    }

    public static function isValidBarangay($brgy)
    {
        $barangays=BarangayFile::getBarangays();

        return in_array($brgy,$barangays);
        
    }
}