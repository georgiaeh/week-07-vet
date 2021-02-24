<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;

class AnimalController extends Controller
{
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

    public function editPost()
    {

    }

    public function show(Owner $owner, Animal $animal)
    {
        return view("animals/show", ["animal" => $animal, "owner" => $owner]);
    }


}
