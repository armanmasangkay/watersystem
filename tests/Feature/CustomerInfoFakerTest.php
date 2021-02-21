<?php

namespace Tests\Feature;

use App\Classes\CustomerRandomData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerInfoFakerTest extends TestCase
{
    public function test_all_has_values()
    {
        $faker=new CustomerRandomData();
        $this->assertTrue(
            ($faker->purok()?true:false) &&
            ($faker->civilStatus()?true:false )&&
            ($faker->barangay()?true:false)&&
            ($faker->contactNumber()?true:false) &&
            ($faker->connectionType()?true:false) &&
            ($faker->connectionStatus()?true:false )
        );
    }

}
