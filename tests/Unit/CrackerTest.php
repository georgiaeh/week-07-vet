<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Cracker;

class CrackerTest extends TestCase
{
    private $key = "! ) # ( . * % & > < @ a b c d e f g h i j k l m n o";

    public function setUp() : void
    {
        $this->cracker = new Cracker($this->key);
    }

    public function test_key_set_correctly()
    {
        $this->assertSame($this->key, $this->cracker->getKey());
    }

    public function test_cracker_accepts_string_to_decrypt()
    {
        $code = "&.aad bjb";
        $this->cracker->decrypt($code);
        $this->assertSame($code, $this->cracker->getCode());
    }

    public function test_decrypt_one_letter()
    {
        $code = "!";
        $this->assertSame("a", $this->cracker->decrypt($code));
    }

    public function test_to_decrypt_two_letters()
    {
        $code="!)";
        $this->assertSame("ab", $this->cracker->decrypt($code));
    }

    public function test_code_with_sapces()
    {
        $code="! )";
        $this->assertSame("a b", $this->cracker->decrypt($code));
    }

    public function testFull()
    {
        $cracker = new Cracker("! ) # ( . * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("hello mum", $cracker->decrypt("&.aad bjb"));
    }

}
