<?php

namespace Tests\Feature;

use App\Classes\BarangayFile;
use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BarangayDataTest extends TestCase
{
  
    public function test_barangay_variable_has_data()
    {
        $systemUser=Systemusers::factory()->create();
        $response=$this->actingAs($systemUser)->get(route('admin.register_customer'));
        $response->assertViewHas('barangays');
        $hasData=count($response['barangays'])>0;
        $this->assertTrue($hasData);

    }

    public function test_was_able_to_read_file()
    {
       $file= BarangayFile::get();
       $hasFile=$file?true:false;
       $this->assertTrue($hasFile);
    }
    

}
