<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function UserLogin(Request $request){
    	if(Auth::guard('web')->check()){
    		return redirect()->route('index');
    	}else{
    		return view('user.login');
    	}
    }

    public function PostUserLogin(Request $request){
    	$user = ['email' => $request->email, 'password' => $request->password, 'active' => 1];
    	if(Auth::guard('web')->attempt($user)){
    		return redirect()->route('index');
    	}else{
    		return redirect()->route('login-user');	
    	}

    }



    public function LogOutUser(){
        Auth::guard('web')->logout();
        return redirect()->route('login-user'); 
    }


    public function LogOutAdmin(){
        
    }
}
