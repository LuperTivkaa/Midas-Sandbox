<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index (){
        return view('Home.home');
    }
    //about method
    public function about (){
        return view('Home.about');
    }

    //Steering Committtee
    public function committee (){
        return view('Home.committee');
    }

    //Board
    public function board (){
        return view('Home.board');
    }

    //products
    public function products (){
        return view('Home.products');
    }

}
