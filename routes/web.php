<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["prefix" => "owners"] , function () {
    Route::group(["middleware" => "auth"], function(){//protects the following routes, have to be authenticates to access them
        Route::get('', [OwnerController::class, "index"]);
        Route::get('create', [OwnerController::class, "create"]);
        Route::post('create', [OwnerController::class, "createPost"]);
        Route::get('search', [OwnerController::class, "search"]);
        Route::get('{owner}', [OwnerController::class, "show"]);
        Route::get('{owner}/edit', [OwnerController::class, "edit"]);
        Route::post('{owner}/edit', [OwnerController::class, "editPost"]);  
    });
});
 

Route::get('/', [HomeController::class, "index"])->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(["prefix" => "users"] , function () { 
    Route::group(["middleware" => "auth"], function(){
        Route::get('/', [UserController::class, "index"]);
        Route::get('{user}', [UserController::class, "show"]);
    });
});