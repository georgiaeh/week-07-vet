<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;
use App\Http\Resources\API\AnimalResource;
use App\Http\Requests\API\AnimalRequest;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        return AnimalResource::collection($owner->animals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $data = $request->all();
        

        $animal = new Animal($data);
        $animal->owner()->associate($owner);
        $animal->save();

        $treatments = $request->get("treatments");
        $dategiven = $request->get("date_given");
        if(is_null($treatments) === false ){
            $animal->setTreatments($treatments, $dategiven);
        }
        
        
        return new AnimalResource($animal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner, Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Owner $owner, Animal $animal)
    {
        $data = $request->all();
        $animal->fill($data);
        $animal->save();

        $treatments = $request->get("treatments");
        $dategiven = $request->get("date_given");
        if(is_null($treatments) === false ){
            $animal->setTreatments($treatments, $dategiven);
        }

        return new AnimalResource($animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner, Animal $animal)
    {
        $animal->delete();

        return response(null, 204);
    }
}
