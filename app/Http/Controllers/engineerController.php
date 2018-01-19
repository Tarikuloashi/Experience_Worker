<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class engineerController extends Controller
{
    public function home(){
    	return view('engineers.engineerHome');
    }
    public function profile(){
    	return view('engineers.engineerProfile');
    }
    public function currentJob(){
    	return view('engineers.currentJob');
    }
    public function history(){
    	return view('engineers.engineerHistory');
    }

}
