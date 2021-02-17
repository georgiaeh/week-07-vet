<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "telephone", "email",
        "address_1", "address_2", "town", "postcode"];

    public function fullName() : string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress() : string
    {
        return 
            "{$this->address_1} \n 
            {$this->address_2} \n 
            {$this->town} \n
            {$this->postcode}";
    }

    public function formattedPhoneNumber()
    {
        $number = $this->telephone;
        $numberArray = str_split($number, 1);
        $formattedNum = implode("", array_slice($numberArray, 0, 4));
        $formattedNum .= " ";
        $formattedNum .= implode("", array_slice($numberArray, 4, 3));
        $formattedNum .= " ";
        $formattedNum .= implode("", array_slice($numberArray, 7, 4));
        return $formattedNum;
    }

    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }

        if ($number === 1) {
            return "Yes we have 1 banana";
        }

        return "Yes we have {$number} bananas";
    }

    public static function emailExists($email)
    {
        $dbSearchEmail = Owner::where('email', $email)->get()->count();
        if($dbSearchEmail === 0){
            return false;
        } else {
            return true;
        }
    }

}
