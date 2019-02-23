<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;
use App\Nok;
use App\Bank;

class RegistrationController extends Controller
{
    //Register  new staff
    public function createUser (){
        $title ="New User";
        $roles = Role::orderBy('name')->pluck('name','id');
        return view('Registration.newUser',compact('title','roles'));
    }

    //Example
    // public function store(Request $request)

    // {

    //     $request->validate([

    //             'name' => 'required',

    //             'password' => 'required|min:5',

    //             'email' => 'required|email|unique:users'

    //         ], [

    //             'name.required' => 'Name is required',

    //             'password.required' => 'Password is required'

    //         ]);

    //     $input = request()->all();

    //     $input['password'] = bcrypt($input['password']);

    //     $user = User::create($input);

    

    //     return back()->with('success', 'User created successfully.');

    // }

   //Store  new staff
   public function storeUser (Request $request){
    //validate the form
    $this->validate(request(), [
        'payment_number'=>'required',
        'password' =>'required|confirmed',
        'email' =>'email',
        'title'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'employ_type'=>'required',
        'dept'=>'required',
        'phone'=>'required',
        'dob'=>'required',
        'home_add'=>'required|max:20',
        'res_add'=>'required|max:20',
        'sex'=>'required',
        'job_cadre'=>'required',
        'staff_no'=>'required|integer',
        'marital_status'=>'required',
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
    $user->res_add = $request['res_add'];
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
    session()->flash('message','User Created Successfully');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
return redirect('/New');
}

//form for nok 
public function nextOfKin (){
    $title ="User NOK";
    return view('Registration.userNok',compact('title'));
}

//Save next of kin
public function nokStore (Request $request){
    
    //validate the form
    $this->validate(request(), [
        'payment_number'=>'required',
        'email' =>'email',
        'title'=>'required',
        'sex'=>'required',
        'relationship'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'phone'=>'required',
    ]);
    $user = User::where('payment_number',request(['payment_number']))->firstOrFail();
    $user_id = $user->id;

    $user_nok = new Nok();
    $user_nok->user_id = $user_id;
    $user_nok->relationship = $request['relationship'];
    $user_nok->email = $request['email'];
    $user_nok->title = $request['title'];
    $user_nok->first_name = $request['first_name'];
    $user_nok->last_name = $request['last_name'];
    $user_nok->other_name = $request['other_name'];
    $user_nok->phone = $request['phone'];   
    $user_nok->save();

    //flash message
session()->flash('message','User Next Of Kin Created Successfully');
return redirect('/Nok');
}


//form for USER BANK DETAILS
public function bank(){
    $title ="User Bank Detail";
    return view('Registration.userBank',compact('title'));
}

//Save bank Store
public function bankStore (Request $request){
    //validate the form
    $this->validate(request(), [
        'payment_number'=>'required',
        'bank_name' =>'required',
        'bank_branch' =>'required',
        'sort_code' =>'required',
        'acct_name' =>'required',
        'acct_number' =>'required|integer',
    ]);

    $user = User::where('payment_number',request(['payment_number']))->firstOrFail();
    $user_id = $user->id;

    $user_bank = new Bank();
    $user_bank->bank_name = $request['bank_name'];
    $user_bank->bank_branch = $request['bank_branch'];
    $user_bank->sort_code = $request['sort_code'];
    $user_bank->acct_name = $request['acct_name'];
    $user_bank->acct_number = $request['acct_number'];
    $user_bank->user_id = $user_id;
    
    $user_bank->save();
   
    //flash message
    session()->flash('message','User Bank Details Created Successfully');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
return redirect('/New');
}

}
