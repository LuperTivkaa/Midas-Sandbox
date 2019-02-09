<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //Register  new staff
    public function createStaff (){
        $title ="New User";
        return view('Registration.createStaff')->with('title',$title);
    }

   //Store  new staff
   public function storeUser (){
    //validate the form
    $this->validate(request(), [
        'payment_number'=>'required',
        'password' =>'required',
        'email' =>'required|email',

    ]);

    //Create the staff
    $user = User::create(request(['payment_number','password','email']));


    //Login the User
    //*** */auth()->login($staff);
    //flash message
    //*** */session()->flash('message','Staff Created');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
//return redirect('/Staff/New');
     return 13234;
}
}
