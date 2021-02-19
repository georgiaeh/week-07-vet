<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestView;

class HomepageViewTest extends TestView
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_homepage_view_is_welcome()
    {
        
        $view = $this->view('welcome');
        $view->assertViewIs('welcome');
    }

    public function test_owners_view_is_owners()
    {
        $view = $this->view('welcome');
        $view->assertViewIs('welcome');
    }
}
