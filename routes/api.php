<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OwnerController;
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

Route::get('/owners', [OwnerController::class, "index"]);
Route::post('/owners/create', [OwnerController::class, "store"]);
Route::get('/owners/{owner}', [OwnerController::class, "show"]);
Route::put('/owners/{owner}/edit', [OwnerController::class, "update"]);
Route::delete('/owners/{owner}/delete', [OwnerController::class, "destroy"]);