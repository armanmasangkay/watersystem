<?php

namespace Tests\Feature;

use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login()
    {
       $systemUser=Systemusers::factory()->create([
           'password'=>Hash::make('1234')
       ]);
       $response=$this->post(route('login'),[
           'username'=>$systemUser->username,
           'password'=>'1234'
       ]);

      $this->assertTrue($this->isAuthenticated());

    }
}
