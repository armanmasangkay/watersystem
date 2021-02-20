<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewTransactionViewTest extends TestCase
{
    private function newTransactionView($expectedTextToSee,$data=[])
    {
        $view= $this->view('pages.new-transaction',$data);
        $view->assertSeeText($expectedTextToSee);

    }


    public function test_has_please_search_for_customer_id()
    {
       $this->newTransactionView("Please search a Customer ID");
    }

 
}
