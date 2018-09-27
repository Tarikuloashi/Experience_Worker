<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Service;
use App\Category;

class frontEndController extends Controller
{
    public function home(){
      return view('frontEnd.home.homeContent');
    }

    public function about(){
      return view('frontEnd.about.aboutContent');
    }

    public function allServices(){
      $services= Service::all();
      return view('frontEnd.service.allService',['services'=>$services]);
    }
}
