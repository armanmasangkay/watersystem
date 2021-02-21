<?php

namespace Tests\Feature;

use App\Classes\BarangayFile;
use App\Classes\Facades\UserAccountNumber;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Classes\Facades\CustomerFactory;

class CustomerFactoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_generate_100_unique_customers()
    {
        CustomerFactory::create(100);
        $this->assertDatabaseCount('customers',100);

    }
}
