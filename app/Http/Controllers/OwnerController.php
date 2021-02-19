<?php

namespace App\Http\Controllers;

use App\Models\Owner;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return view("owners", ["owners" => Owner::orderBy("last_name")->paginate(10)]);
    }

    public function show(Owner $owner)
    {
        return view("owners/show", ["owner" => $owner]);
    }
}
