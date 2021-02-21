<?php

namespace Tests\Feature;

use App\Classes\Facades\UserAccountNumber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountNumberGenerationTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_format()
    {
        $yearToday=date("Y");
        $accountNumber=UserAccountNumber::generateNew("Amparo");
        $expectedAccountNumber="020-$yearToday-001";
        $this->assertEquals($expectedAccountNumber,$accountNumber);
    }

}
