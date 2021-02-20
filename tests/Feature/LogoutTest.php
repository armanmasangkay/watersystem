<?php

namespace Tests\Feature;

use App\Models\Systemusers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;
    private function performLogoutAsUser()
    {
        $systemUser=Systemusers::factory()->create();

        return $this->actingAs($systemUser)->post(route('logout'));
    }

    public function test_logout_redirect_to_login_route()
    {
        $response=$this->performLogoutAsUser();
        $response->assertRedirect(route('login'));
    }

    public function test_not_authenticated_after_logout()
    {
        $this->performLogoutAsUser();
        $this->assertTrue(!$this->isAuthenticated());
    }
}
