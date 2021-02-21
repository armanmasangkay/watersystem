<?php

namespace Tests\Feature;

use App\Classes\BarangayFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RetrieveBarangayTest extends TestCase
{
   
    public function test_barangay_file_can_be_retrieved()
    {
        $file=BarangayFile::get();
        $this->assertTrue($file?true:false);
    }

    public function test_get_random_valid_barangay()
    {
        $barangay=BarangayFile::getRandomBarangay();
        $isValid=BarangayFile::isValidBarangay($barangay);
        $this->assertTrue($isValid);
        $this->assertNotEmpty($barangay);
    }

    public function test_validate_brgy()
    {
        $isValid=BarangayFile::isValidBarangay("Amparo");

        $this->assertTrue($isValid);
    }

    public function test_invalidate_brgy()
    {
        $isValid=BarangayFile::isValidBarangay("Santo Nino Maasin");

        $this->assertNotTrue($isValid);
    }



}
