<?php namespace App\Classes\Facades;

use App\Models\Customer;

class CustomerFactory{

    public static function create(int $count)
    {
        for ($i=0;$i<$count;$i++)
        {
            Customer::factory()->create();
        }
    }
}