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
    //constructor
    public function __constructor(){
    //prevent user from seeing signin page
    $this->middleware('auth');
    }

  

    //Register  new staff
    public function createUser (){
        $title ="New User";
        return view('Registration.newUser',compact('title'));
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
        'member_type'=>'required',
        'dept'=>'required',
        'phone'=>'required',
        'dob'=>'required',
        'home_add'=>'required|max:100',
        'res_add'=>'required|max:100',
        'sex'=>'required',
        'job_cadre'=>'required',
        'staff_no'=>'required|integer',
        'marital_status'=>'required',
    ]);
    

    $user = new User();
    $payment_number = $request['payment_number'];
    $user->payment_number = $payment_number;
    $user->password = Hash::make($request['password']);
    $user->email = $request['email'];
    $user->title = $request['title'];
    $user->first_name = $request['first_name'];
    $user->last_name = $request['last_name'];
    $user->other_name = $request['other_name'];
    $user->employ_type = $request['employ_type'];
    $user->membership_type = $request['member_type'];
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

    if ($user->save()) {
        $user_id = $user->userID($payment_number);
        toastr()->success('Data has been saved successfully!');

        //return redirect()->route('posts.index');
        return redirect('/userDetails/'.$user_id);
    }

    toastr()->error('An error has occurred please try again later.');
    return back();

    //Login the User
    //auth()->login($user);
    //flash message
    //session()->flash('message','User Created Successfully');
    //redirect to route
    //*** */return redirect('')->home;
// ***return redirect('/Staff/New')->with('success','Staff Created');
//return redirect('/New');
}

//form for nok 
public function nextOfKin ($id){
    $title ="User NOK";
    $id = $id;
    return view('Registration.userNok',compact('title','id'));
}

//Save next of kin
public function nokStore (Request $request){
    
    //validate the form
    $this->validate(request(), [
        'email' =>'email',
        'title'=>'required',
        'sex'=>'required',
        'user_id'=>'required',
        'relationship'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'phone'=>'required',
    ]);
       
        $user_nok = new Nok();
        $user_id = $request['user_id'];
        $user_nok->user_id = $user_id;
        $user_nok->relationship = $request['relationship'];
        $user_nok->email = $request['email'];
        $user_nok->gender = $request['sex'];
        $user_nok->title = $request['title'];
        $user_nok->first_name = $request['first_name'];
        $user_nok->last_name = $request['last_name'];
        $user_nok->other_name = $request['other_name'];
        $user_nok->phone = $request['phone'];   
        $user_nok->save();

        if ($user_nok->save()) {
            toastr()->success('User Next of Kin has been saved successfully!');
    
            return redirect('/userDetails/'.$user_id);
        }
        toastr()->error('An error has occurred please try again later.');
        return back();  
}


//form for USER BANK DETAILS
public function bank($id){
    $title ="User Bank Detail";
    $id = $id;
    return view('Registration.userBank',compact('title','id'));
}

//Save bank Store
public function bankStore (Request $request){
    //validate the form
    $this->validate(request(), [
        'bank_name' =>'required',
        'bank_branch' =>'required',
        'user_id' =>'required',
        'sort_code' =>'required',
        'acct_name' =>'required',
        'acct_number' =>'required|integer|digits:10',
    ]);

 
        
        $user_id = $request['user_id'];
        $user_bank = new Bank();
        $user_bank->bank_name = $request['bank_name'];
        $user_bank->bank_branch = $request['bank_branch'];
        $user_bank->sort_code = $request['sort_code'];
        $user_bank->acct_name = $request['acct_name'];
        $user_bank->acct_number = $request['acct_number'];
        $user_bank->user_id = $user_id;
        $user_bank->save();
        if ($user_bank->save()) {
            toastr()->success('User bank details has been saved successfully!');
    
            return redirect('/userDetails/'.$user_id);
        }
        toastr()->error('An error has occurred trying to save record, please try again later.');
        return back();
   
   
}

}
