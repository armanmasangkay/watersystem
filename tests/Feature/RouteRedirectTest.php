<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteRedirectTest extends TestCase
{
    public function test_access_root_will_redirect_to_login()
    {
        $response=$this->get('/');
        $response->assertRedirect(route('login'));
    }
}
