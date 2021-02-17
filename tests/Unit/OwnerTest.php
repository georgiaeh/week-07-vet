<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{
    use RefreshDatabase;
    private $owner;

   public function setUp() : void
   {
       parent::setUp();
       
       $this->owner = Owner::create([
            "first_name" => "Testy",
            "last_name" => "McTestface",
            "telephone" => "XXXXXXXXXXX",
            "email" => "TEST@TEST.com",
            "address_1" => "1 TEST ROAD",
            "address_2" => "",
            "town" => "TEST TOWN",
            "postcode" => "T3S TT3"
        ]);
   }

    public function test_read_from_database()
    {
        $testOwner = Owner::where("first_name", "Testy")->get()->first();
        $this->assertSame("McTestface" , $testOwner->last_name);
    }

    public function test_email_exists()
    {
        $this->assertTrue(Owner::emailExists("TEST@TEST.com"));
        $this->assertFalse(Owner::emailExists("notinthe@database.com"));

    }
}
