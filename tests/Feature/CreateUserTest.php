<?php

namespace Tests\Feature;

use App\Models\Systemusers;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserTest extends TestCase
{

    use RefreshDatabase;

    public function test_error_when_username_is_existing()
    {
        $systemUser=Systemusers::factory()->create();
        $response=$this->actingAs($systemUser)->post(route('add_user'),[
            'username'=>$systemUser->username,
            'password'=>'1234'
        ]);

        $response->assertSessionHasErrors(['username']);
    }

    public function test_error_when_password_is_lesser_than_4_digit()
    {
        $systemUser=Systemusers::factory()->create();

        $response=$this->actingAs($systemUser)->post(route('add_user'),[
            'username'=>"$systemUser-xxxx".md5('1234'),
            'password'=>'123'
        ]);
        $response->assertSessionHasErrors(['password']);
    }
  
}
