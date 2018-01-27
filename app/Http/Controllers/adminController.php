<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Roles;
use App\Users;

class adminController extends Controller
{
    public function home(){
    	return view('admins.adminHome');
    }

    public function showUser(){
      $users = Sentinel::where('roles_id', '2')
              ->orderBy('last_name', 'asc')
              ->get();

      return view('adminUserList',['users' => $users]);
    }
}
