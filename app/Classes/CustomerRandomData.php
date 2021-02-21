<?php namespace App\Classes;

use App\Classes\Interfaces\IRandomData;

class CustomerRandomData implements IRandomData{

    protected $civilStatus=['Married','Widowed','Single'];
    protected $purok=['Purok 1','Purok 2','Purok 3'];
    protected $connectionType=['Residential','Commercial','Institutional'];
    protected $connectionStatus=['Active','Inactive'];

    public function civilStatus():string
    { 
        return $this->civilStatus[random_int(0,2)];
    }
    public function purok():string
    {
        return $this->purok[random_int(0,2)];
    }
    public function barangay():string
    {

    }
    public function contactNumber():string
    {

    }
    public function connectionType():string
    {

    }
    public function connectionStatus():string
    {

    }

}