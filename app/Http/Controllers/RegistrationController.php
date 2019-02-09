<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //Register  new staff
    public function createStaff (){
        $title ="New Staff";
        return view('Registration.createStaff')->with('title',$title);
    }

    public function storeStaff (){
        $title ="New Staff";
        return view('Registration.createStaff')->with('title',$title);
    }
}
