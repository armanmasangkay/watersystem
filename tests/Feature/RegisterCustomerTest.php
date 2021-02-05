<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterCustomerTest extends TestCase
{
    public function test_success_on_registration()
    {
     
        $response =$this->post(route('admin.register_customer'),
        [
            'first_name'=>'Arman',
            'last_name'=>'Masangkay',
            'civil_status'=>'Married',
            'sitio_purok'=>'Purok1',
            'barangay'=>'1234',
            'contact'=>'1234',
            'connection_type'=>'12345',
            'connection_status'=>'Something' 
        ]);

        $response->assertSessionHas('success');
    }

    public function test_fail_on_no_name()
    {
        $response =$this->post(route('admin.register_customer'),
        [
            'first_name'=>'',
            'last_name'=>'Masangkay',
            'civil_status'=>'Married',
            'sitio_purok'=>'Purok1',
            'barangay'=>'1234',
            'contact'=>'1234',
            'connection_type'=>'12345',
            'connection_status'=>'Something' 
        ]);

        $response->assertSessionHasErrors(['first_name']);
    }
    
}
