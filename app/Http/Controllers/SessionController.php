<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\User;

class SessionController extends Controller
{ 
    //protected $redirectTo ='/login';

    public function __constructor(){
        //prevent user from seeing signin page
        $this->middleware('guest', ['except'=>'destroy']);
    }
    //show login form
    public function create(){
        $title = "Login";
        return view('Session.create',compact('title'));
    }

    //log user in
    public function store(){
        $this->validate(request(), [
            'password' =>'required',
            'email' =>'required|email',
        ]);
       
        //attempt to login
        if(!Auth::attempt(request(['password','email']))){
            return back()->withErrors([
                'message'=>'Please check your login credentials and try again.'
            ]);
        } 
        // Check and redirect
        //get user id
        //check if id exist in role
        //if true, then staff and user, create a link to show user portal for staff only
        //otherwise redirect to user portal


        //redirect
        return redirect('/Dashboard');
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect('/Dashboard');
        //     //return redirect()->intended('dashboard');
        // }
        // else{
        //     return back()->withErrors([
        //         'message'=>'Please check your login credentials and try again.'
        //          ]);
        // }

        // $this->validate(request(), [
        //     'password' =>'required',
        //     'email' =>'required|email',
        // ]);
       
        //attempt to login
        // $email = request()->input('email');
        // $password = request()->input('password');
        
        // if(!Auth::attempt(['email'=>$email,'password'=>$password])){
        //     return back()->withErrors([
        //         'message'=>'Please check your login credentials and try again.'
        //     ]);
        // }  
        // return redirect('/Dashboard');       
    }

    //logout
    //show login form
    public function destroy(){
        auth()->logout();
        return redirect('/login');
    }
}
