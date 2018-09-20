<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function home(){
      return view('frontEnd.home.homeContent');
    }

    public function about(){
      return view('frontEnd.about.aboutContent');
    }
}
