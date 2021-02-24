<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "telephone", "email", "address_1", "address_2", "town", "postcode"];

    //----- Eloquent ORM Methods ------
    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    //----- Static Functions ------------------------------------------
    public static function emailExists($email) : bool
    {
        $dbSearchForEmail = Owner::where('email', $email)->get()->count();
        // Database search always returns a Collection, even if there are no matches.
        //Use count() to see if it is empty (email not found)
        //or not empty if a match was found.
        if($dbSearchForEmail === 0){
            return false;
        } else {
            return true;
        }
    }
    
    public static function validPhoneNumber($phone)
    {
        if(preg_match("/^[+]\d{13}$/", $phone) === 1){ //if matches a valid international number 
            return true;
        } else if (preg_match("/^07\d{9}$/", $phone) === 1){ // if matches a valid non-international mobile number
            return true;
        } else {
            return false;
        }
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

    //----- Model methods ------------------------------------
    public function fullName() : string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress() : string
    {
        return 
            "{$this->address_1}, 
            {$this->address_2}, 
            {$this->town},
            {$this->postcode}";
            //other way to do it, which better deals with blank fields:
            //put in to array, remove blank values, 
            //output with comma seperators
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
}
