<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index (){
        $title ="Dashboard Home";
        return view('Dashboard.home')->with('title', $title);
    }
}
