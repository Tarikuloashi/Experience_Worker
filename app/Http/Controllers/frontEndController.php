<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Service;
use App\Category;

class frontEndController extends Controller
{
    public function home(){
      $services=DB::table('services')
                ->join('categories','services.categoryid','=','categories.id')
                ->select('services.*','categories.categoryName')
                ->get();
      return view('visitors.home',['services'=>$services]);
    }

}
