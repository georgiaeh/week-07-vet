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
        return $this->belongsToMany(Treatment::class);
    }

    public function setTreatments(array $strings)
    {
        $treatments = Treatment::fromStrings($strings);
        $this->treatments()->sync($treatments->pluck("id"));
        return $this;
    }

    //----- Static Functions ------
    //Place any static functions here

    //----- Model methods ----------
    public function dangerous()
    {
        return $this->biteyness >= 3;
    }

    
}
