<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;

class RegistrationController extends Controller
{
    //Register  new staff
    public function createStaff (){
        $title ="New User";
        $roles = Role::orderBy('name')->pluck('name','id');
        return view('Registration.createStaff',compact('title','roles'));
    }

   //Store  new staff
   public function storeUser (Request $request){
    //validate the form
    $this->validate(request(), [
        'payment_number'=>'required',
        'password' =>'required|confirmed',
        'email' =>'required|email',
    ]);

    $user = new User();
    $user->payment_number = $request['payment_number'];
    $user->password = Hash::make($request['password']);
    $user->email = $request['email'];
    $user->save();
    //Create the staff
   // $user = User::create(request(['payment_number','password','email']));
    $user->roles()->attach(request(['role']));

    //Login the User
    auth()->login($user);
    //flash message
    //*** */session()->flash('message','Staff Created');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
return redirect('/New');
}
}
