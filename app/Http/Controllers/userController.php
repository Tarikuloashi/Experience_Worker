<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class userController extends Controller
{
    public function home(){
    	return view('users.userHome');
    }
    public function profile(){
      // $id=Sentinel::getUser();
      // $user = Sentinel::findById($id);
      $user =Sentinel::getUser();
      // return view('users.userProfile',['user' =>$user]);
    	 return view('users.userProfile',['user'=>$user]);
    }
    public function post(){
    	return view('users.userPost');
    }
    public function history(){
    	return view('users.userHistory');
    }




}
