<?php

namespace Tests\Feature;

use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterCustomerTest extends TestCase
{

    use RefreshDatabase;
    
    private function getSystemuser()
    {
        return Systemusers::factory()->create();
    
    }

    public function test_fail_if_contact_number_is_not_numeric()
    {
        $systemUser=$this->getSystemuser();

        $response =$this->actingAs($systemUser)->post(route('admin.register_customer'),
        [
            'first_name'=>'Arman',
            'last_name'=>'Masangkay',
            'civil_status'=>'Married',
            'sitio_purok'=>'Purok1',
            'barangay'=>'1234',
            'contact'=>'abc',
            'connection_type'=>'12345',
            'connection_status'=>'Something' 
        ]);

        $response->assertSessionHasErrors(['contact']);
    }

    public function test_success_on_registration()
    {
        $systemUser=$this->getSystemuser();

        $response =$this->actingAs($systemUser)->post(route('admin.register_customer'),
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
   
        $systemUser=$this->getSystemuser();
        $response =$this->actingAs($systemUser)->post(route('admin.register_customer'),
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
