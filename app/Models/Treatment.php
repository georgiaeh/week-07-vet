<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ["name"];

    //----- Eloquent ORM Methods ------
    public function animals()
    {
        return $this->belongsToMany(Animal::class)->withPivot("date_given");
    }

    //----- Static Functions ------
    public static function fromStrings(array $strings)
    {
        return collect($strings)->map(fn($str) => trim($str))
                ->unique()
                ->map(fn($str) => Treatment::firstOrCreate(["name" => $str]));
    }

    //----- Model methods ----------
}