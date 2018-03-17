<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index(){



    	return view('user.dashboard');
    }

    public function UserPost(){
    	return view('user.post');
    }

    public function UserPostEnd(){
    	return view('user.post');
    }

    public function UserPostEdit(){
    	return view('user.post');
    }


    public function UserPostPending(){
    	return view('user.post');
    }

    public function UserPostEditID($id){
    	return view('user.edit');
    }

    public function Account(){
    	return view('user.account');
    }
}
