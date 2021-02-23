<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ["name", "dob", "species", "weight", "height", "biteyness"];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }
}
