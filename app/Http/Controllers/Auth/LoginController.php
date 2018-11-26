<?php

namespace App\Http\Controllers\auth;
use App\Rules\usernameorEmail; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel; 
class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('auth.login'); 
    } 
    public function postLogin(){
       request()->validate([
'email' => new usernameorEmail , 
'password' => 'required|min:8|max:32|string' 
        ]);
         
        $user = Sentinel::authenticate([
'login' => request()->email , 
'password' => request()->password 
        ]); 
        if($user){
            return redirect('/')->with('success', 'You have logged In Successfuly'); 

        }
        return redirect()->back()->with('error', 'Invalid Username or Password'); 

    }

    public function logout(){
        Sentinel::logout(); 
        return redirect('/')->with('success', 'Come back again whenever you can'); 
    }
}
