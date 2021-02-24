<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OwnerController;
use App\Http\Controllers\API\AnimalController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// -------------------- API Routes for Owners --------------------------------
Route::get('/owners', [OwnerController::class, "index"]);
Route::post('/owners/create', [OwnerController::class, "store"]);
Route::get('/owners/{owner}', [OwnerController::class, "show"]);
Route::put('/owners/{owner}/edit', [OwnerController::class, "update"]);
Route::delete('/owners/{owner}/delete', [OwnerController::class, "destroy"]);


// -------------------- API Routes for Animals --------------------------------

Route::get('/owners/{owner}/animals', [AnimalController::class, "index" ]); //GET -> list of all animals belonging to owner
Route::post('/owners/{owner}/animals', [AnimalController::class, "store"]); //POST -> add to the animals which belong to the owner
Route::group(["middleware" => "check.owner"], function(){
    Route::get('/owners/{owner}/animals/{animal}', [AnimalController::class, "show" ]); //GET ->specific animal belonging to owner 
    Route::put('/owners/{owner}/animals/{animal}', [AnimalController::class, "update" ]);// PUT -> update details of the animal
    Route::delete('/owners/{owner}/animals/{animal}', [AnimalController::class, "destroy" ]); // DELETE -> delete the animal
});
