<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewTransactionTest extends TestCase
{

   use RefreshDatabase;
   public function test_search_status_error_when_customer_not_found()
   {
        $systemUser=Systemusers::factory()->create();
        $response=$this->actingAs($systemUser)->get(route('new_transaction.search',['customerId'=>'123']));
        $response->assertSessionHas('status','error');
   }

   public function test_search_status_success_when_customer_is_found()
   {
    $systemUser=Systemusers::factory()->create();
    $customer=Customer::factory()->create();
    $response=$this->actingAs($systemUser)->get(route('new_transaction.search',['customerId'=>$customer->account_number]));
    $response->assertSessionHas('status','success');

   }
}
