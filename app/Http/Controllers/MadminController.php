<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadminController extends Controller
{
    //
    public function index (){
        $title ="Dashboard Home";
        return view('Madmin.index')->with('title',$title);
    }
    //about method
    // public function about (){
    //     $title ="About MIDAS";
    //     return view('Home.about')->with('title',$title);
    // }

    //Steering Committtee
    // public function committee (){
    //     $title ="Steering Committee";
    //     return view('Home.committee')->with('title',$title);
    // }

    //Board
    // public function board (){
    //     $title ="Board Members";
    //     return view('Home.board')->with('title',$title);
    // }

    //products
    // public function products (){
    //     $title = "Our Products";
    //     return view('Home.products')->with('title',$title);
    // }
}
