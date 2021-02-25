<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizzBuzz extends Model
{
    use HasFactory;

    public function forNumber($num)
    {
        $output = "";

        if ($num % 3 === 0){
            $output .= "Fizz";
        }

        if ($num % 5 === 0){
            $output .= "Buzz";
        } 

        if ($num % 7 === 0){
            $output .= "Rarr";
        }

        if($output === "") {
            $output .= $num;
        }
        return $output;
    }
}
