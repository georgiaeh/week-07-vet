<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ["name", "dob", "species", "weight", "height", "biteyness", "owner_id"];

    //----- Eloquent ORM Methods ------
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class)->withPivot("date_given");
    }

    public function setTreatments(array $strings, $dategiven)
    {
        $treatments = Treatment::fromStrings($strings);
        $this->treatments()->attach($treatments->pluck("id"), ["date_given" => $dategiven]);
        return $this;
    }

    //----- Static Functions ------
    //Place any static functions here

    //----- Model methods ----------
    public function dangerous()
    {
        if($this->biteyness >= 3){
            return "True. Biteyness: {$this->biteyness}";
        } else {
            return "False. Biteyness: {$this->biteyness}";
        }
        
    }

    
}
