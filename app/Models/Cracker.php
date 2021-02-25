<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cracker extends Model
{
    use HasFactory;

    private $key;
    private $code;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function decrypt($code)
    {
        $this->code = $code;
        
        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $alphabetArray = str_split($alphabet, 1) ;

        $keyArray = explode(" ", $this->key);

        $codeArray = str_split($code, 1);

        $decryptedArray = [];
        foreach($codeArray as $letter){
            if($letter === " "){
                $decryptedArray [] = " ";
            } else {
                $position = array_search( $letter, $keyArray);
                $decryptedArray [] = $alphabetArray[$position];
            }
            
        }

        return implode($decryptedArray);
    }

}
