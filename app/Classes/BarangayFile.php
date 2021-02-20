<?php namespace App\Classes;

class BarangayFile{

    public static function get()
    {
        
        $file=fopen(storage_path('files/barangays.txt'),'r');
        return $file;
    }
}