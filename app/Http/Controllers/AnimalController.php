<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;
use App\Http\Requests\TreatmentRequest;

class AnimalController extends Controller
{

    public function index()
    {
        return view("animals", ["animals" => Animal::all()->sortBy("name")]);
    }

    public function create()
    {
        return view("animals/form", ["view" => "create"]);
    }

    public function createPost(AnimalRequest $request, Owner $owner)
    {
        $data = array_merge($request->all(),["owner_id" => $owner->id]);
        $animal = Animal::create($data);
        return redirect("owners/{$owner->id}/animals/{$animal->id}");
    }

    public function edit(Owner $owner, Animal $animal)
    {
        return view("animals/form", ["animal" => $animal, "view" => "edit"]);   
    }

    public function editPost(AnimalRequest $request, Owner $owner, Animal $animal)
    {
        $data = $request->all();
        $record = Animal::find($animal->id)->fill($data)->save();
        return redirect("owners/{$owner->id}/animals/{$animal->id}");
    }

    public function treatment(Owner $owner, Animal $animal)
    {
        return view("animals/treatmentform", ["animal" => $animal]); 
    }

    public function treatmentPost(TreatmentRequest $request, Owner $owner, Animal $animal)
    {
        $treatment = [$request->treatment];
        $dategiven = $request->date_given;
        $animal = Animal::find($animal->id)->setTreatments($treatment, $dategiven);
        return redirect("owners/{$owner->id}/animals/{$animal->id}");
    }

    public function show(Owner $owner, Animal $animal)
    {
        return view("animals/show", ["animal" => $animal, "owner" => $owner]);
    }
}
