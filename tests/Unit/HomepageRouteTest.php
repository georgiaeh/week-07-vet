<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageRouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_homepage_route_exists()
    {
        $response=$this->get('/doesntexist');
        $response->assertStatus(404);
        
        $response = $this->get('/');
        $response->assertStatus(200);

        
    }

    public function test_owners_route_exists()
    {
        $response=$this->get('/owners/1000000');
        $response->assertStatus(404);
        
        $response = $this->get('/owners');
        $response->assertStatus(200);
    }
}
