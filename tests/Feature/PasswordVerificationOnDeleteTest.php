<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PasswordVerificationOnDeleteTest extends TestCase
{
    use RefreshDatabase;

    private function verifyPassword($expectedStatus,$password="1234")
    {
        $systemUser=Systemusers::factory()->create([
            'password'=>Hash::make("1234")
        ]);
        $customer=Customer::factory()->create();

        $response=$this->actingAs($systemUser)->post(route('verify-admin-pass'),[
            'password'=>$password,
            'account_number'=>$customer->account_number

        ]);
        
        $response->assertJson([
            'status'=>$expectedStatus
        ]);
    }


    public function test_verified_if_password_is_correct()
    {

        $this->verifyPassword("verified");
    }

    public function test_unverified_if_password_is_incorrect()
    {

        $this->verifyPassword("unverified","12345");

    }
   
}
