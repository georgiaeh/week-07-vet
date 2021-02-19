<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        
        return view("welcome",["greeting" => $this->greeting()]);
    }

    public function greeting()
    {
        $currentHour = Carbon::now()->hour;
        if($currentHour >= 0 && $currentHour < 12){
            return "Good morning";
        } else if($currentHour >= 12 && $currentHour < 18){
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }
}
