<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel; 
class RegisterController extends Controller
{
    //
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(){
        
request()->validate([
'email' => 'required|unique:users,email|email',
'username' => 'required|min:6|max:18|alpha_dash|unique:users,username' , 
'fname' => 'required|min:3|max:18|alpha',
'lname' => 'required|min:3|max:18|alpha',
'location' => 'required',
'password' => 'required|string|min:8|max:32|confirmed', 
'dob' => 'required', 

]); 

$user = Sentinel::registerAndActivate([
'email' => request()->email, 
'username' => request()->username, 
'first_name' => request()->fname, 
'last_name' => request()->lname, 
'location' => request()->location, 
'password' => request()->password, 
'dob' => request()->dob
]);
return redirect('/login')->with('success', 'You have been registerd Successfully' ); 
    }
}
