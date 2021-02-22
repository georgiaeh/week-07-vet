<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\OwnerRequest;
use App\Http\Auth;

class OwnerController extends Controller
{
    public function index()
    {
        return view("owners", ["owners" => Owner::orderBy("last_name")->paginate(10), "links" => "yes"]);
    }

    public function create()
    {
        return view("owners/form", ["view" => "create"]);
    }

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
        return redirect("owners/{$owner->id}");
    }

    public function edit(Owner $owner)
    {
        return view("owners/form", ["owner" => $owner, "view" => "edit"]);
    }

    public function editPost(OwnerRequest $request, $owner)
    {//In this function $owner is the $owner ID
        $data = $request->all();
        $record = Owner::find($owner)->fill($data)->save();
        return redirect("owners/{$owner}");
    }

    public function search(Request $request)
    {
        $search = $request->search; //string of search term
        
        //searches the database fields first and last name for the search term
        //search term can only be one word long...
        //split in to an array and itterate?
        //call the firstName method on the owners class?

        $owners_first= Owner::where("first_name", "like", "%{$search}%")->get();
        $owners_last= Owner::where("last_name", "like", "%{$search}%")->get();
        $owners = $owners_first->concat($owners_last);

        return view("owners", ["owners" => $owners, "links" => "no"]);

        //links => no to stop the pagination links from showing because it doesn't work when $owners is passed to the view for some reason. Can't call pagination method on owners? Need to look in to this some more
    }

    public function show(Owner $owner)
    {
        return view("owners/show", ["owner" => $owner]);
    }
}
