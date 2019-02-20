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
    $user->title = $request['title'];
    $user->first_name = $request['first_name'];
    $user->last_name = $request['last_name'];
    $user->other_name = $request['other_name'];
    $user->employ_type = $request['employ_type'];
    $user->dept = $request['dept'];
    $user->phone = $request['phone'];
    $user->dob = $request['dob'];
    $user->home_add = $request['home_add'];
    $user->rse_add = $request['res_add'];
    $user->sex = $request['sex'];
    $user->job_cadre = $request['job_cadre'];
    $user->staff_no = $request['staff_no'];
    $user->marital_status = $request['marital_status'];
    $user->save();
    //Create the staff
   // $user = User::create(request(['payment_number','password','email']));
    $user->roles()->attach(request(['role']));

    //Login the User
    //auth()->login($user);
    //flash message
    session()->flash('message','Staff Created');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
return redirect('/New');
}

//form for nok 
public function nextOfKin (){
    $title ="User NOK";
    //$roles = Role::orderBy('name')->pluck('name','id');
    return view('Registration.nok',compact('title'));
}

//Save next of kin
public function nokStore (){
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
    $user->title = $request['title'];
    $user->first_name = $request['first_name'];
    $user->last_name = $request['last_name'];
    $user->other_name = $request['other_name'];
    $user->employ_type = $request['employ_type'];
    $user->dept = $request['dept'];
    $user->phone = $request['phone'];
    $user->dob = $request['dob'];
    $user->home_add = $request['home_add'];
    $user->rse_add = $request['res_add'];
    $user->sex = $request['sex'];
    $user->job_cadre = $request['job_cadre'];
    $user->staff_no = $request['staff_no'];
    $user->marital_status = $request['marital_status'];
    $user->save();
    //Create the staff
   
    $user->roles()->attach(request(['role']));

  
    //flash message
    session()->flash('message','Staff Created');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
return redirect('/New');
}


//form for nok 
public function bank(){
    $title ="User Bank Detail";
    return view('Registration.bank',compact('title'));
}

}
