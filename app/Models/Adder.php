<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adder extends Model
{
    use HasFactory;

    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }
}
