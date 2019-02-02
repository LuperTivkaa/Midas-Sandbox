<?php

namespace App\Http\Controllers;
use App\Staff;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //Using the staff guard defined
    // public function __construct(){
    //     $this->middleware('auth:staff');
    // }

    //Register  new staff
    public function createStaff (){
        $title ="New Staff";
        return view('Registration.createStaff')->with('title',$title);
    }

    
    //Store  new staff
    public function storeStaff (){
        //validate the form
        $this->validate(request(), [
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'password' =>'required',
            'email' =>'required|email',

        ]);

        //Create the staff
        $staff = Staff::create(request(['first_name','middle_name','last_name','password','email']));

        //Login the User
        //auth()->login($staff);

        //redirect to route
        //return redirect('')->home;
        return redirect('/');
    }
}
