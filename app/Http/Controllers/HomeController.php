<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("welcome",["greeting" => $this->greeting(), "user" => $this->user()]);
    }

    public function greeting()
    {
        $currentHour = Carbon::now()->hour;
        if($currentHour >= 0 && $currentHour < 12){
            return "Good morning, {$this->user()}";
        } else if($currentHour >= 12 && $currentHour < 18){
            return "Good afternoon, {$this->user()}";
        } else {
            return "Good evening, {$this->user()}";
        }
    }

    public function user()
    {
        $user = Auth::user();
        return ucfirst($user->name);
    }

}
