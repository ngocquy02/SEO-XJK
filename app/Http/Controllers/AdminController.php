<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }


    public function Project(){
    	return view('admin.project');
    }

     public function KeyWords(){
    	return view('admin.keyword');
    }

     public function Post(){
    	return view('admin.post');
    }

     public function User(){
    	return view('admin.user');
    }

    public function Edit(){
        return view('admin.edit');
    }

    public function Admin(){
        return view('admin.user');
    }


    public function Test(){
        $item = ['111','1111','1111','1111','111','1111','1111','1111','1111','111','123'];
        $s = json_encode($item);
        echo $s;
    }
}
