<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function home(){
    	return view('users.userHome');
    }
    public function profile(){
    	return view('users.userProfile');
    }
    public function post(){
    	return view('users.userPost');
    }
    public function history(){
    	return view('users.userHistory');
    }


}
