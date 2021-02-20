<?php

namespace Tests\Feature;

use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesForAdminTest extends TestCase
{
    /*
    Test if routes intended for admin can be accessed directly by users that are not authenticated

    */

    use RefreshDatabase;
    private function assertRedirect($routeName,$flag)
    {
        switch ($flag){
            case 'post':
                $response= $this->post(route($routeName),[
                    'test'=>'test',
                
                ]);
                break;
            case 'get':
                $response= $this->get(route($routeName));
                break;
            case 'delete':
                $response= $this->delete(route($routeName));
                break;
            default:
                throw new Exception("Invalid flag. Only 'post' or 'get'");

        }
    
        $response->assertStatus(302);
    }


    public function test_register_customer_is_not_accessible_get()
    {
       $this->assertRedirect('admin.register_customer',"get");
    }

    public function test_register_customer_is_not_accessible_post()
    {
        $this->assertRedirect('admin.register_customer',"post");
    }


    public function test_view_customer_is_not_accessible_get()
    {
        $this->assertRedirect('view_customers',"get");
    }

    public function test_delete_customer_is_not_accessible()
    {
        $this->assertRedirect('delete-customer',"delete");
    }

    public function test_verify_admin_is_not_accessible_post()
    {
        $this->assertRedirect('verify-admin-pass',"post");
    }

    public function test_new_transaction_get()
    {
        $this->assertRedirect('new_transaction','get');
    }

    public function test_new_transaction_search_get()
    {
        $this->assertRedirect('new_transaction.search','get');
    }

    public function test_add_user_get()
    {
        $this->assertRedirect('add_user','get');
    }

    public function test_add_user_post()
    {
        $this->assertRedirect('add_user','post');
    }

    public function test_user_lists_get()
    {
        $this->assertRedirect('user_lists','get');
    }

    public function test_dashboard_get()
    {
        $this->assertRedirect('dashboard','get');
    }

    public function test_logout_post()
    {
        $this->assertRedirect('logout','post');
    }

    public function test_login_form_is_accessible()
    {
        $response=$this->get(route('login'));
        $response->assertOk();
    }

    public function test_login_authentication_is_accessible()
    {
    
        $response=$this->post(route('login'),[
            'username'=>'username',
            'password'=>'password',
        ]);
        $response->assertSessionHasErrors('username');
    }







}
