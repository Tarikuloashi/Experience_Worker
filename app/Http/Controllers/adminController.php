<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Role;
use App\Users;
use DB;
use App\Service;

class adminController extends Controller
{
    public function home(){
    	return view('admins.adminHome');
    }

    public function showUser(){
      $role = Sentinel::findRoleById(3);
      $users = $role->users()->with('roles')->get();
      return view('admins.adminUserList',['users' => $users]);
      // $users = Role::where('role_id', '3')
      //         ->orderBy('user_name', 'asc')
      //         ->get();

      //**********show all role name
      // $roles = Sentinel::inRole('user')->all();

      // foreach ($users as $role) {
      //  echo $role->user_name."<br/>";

   //}

    }

    public function showEngineer(){
      $role = Sentinel::findRoleById(2);
      $engineers = $role->users()->with('roles')->get();
      return view('admins.adminEngineerList',['engineers' => $engineers]);
    }

    public function assignToEngineer($id){
      $user = Sentinel::findById($id);

      $role = Sentinel::findRoleByName('User');
      $role->users()->detach($user);
      $role = Sentinel::findRoleByName('Engineer');
      $role->users()->attach($user);
      return redirect('/adminEngineerList');
    }

    public function assignToUser($id){
      $user = Sentinel::findById($id);

      $role = Sentinel::findRoleByName('Engineer');
      $role->users()->detach($user);
      $role = Sentinel::findRoleByName('User');
      $role->users()->attach($user);
      return redirect('/adminUserList');
    }

    public function createService(){
      return view('admins.createService');
    }

    public function storeService(Request $request){
      DB::table('services')->insert([
    		'serviceName'=>$request->serviceName,
    		'servicePrice'=>$request->servicePrice,
    		'serviceDescription'=>$request->serviceDescription,

    		]);
    	return redirect('/createService')->with('message','Service Store Successfully ');
    }

    public function manageService(){
      $services=Service::all();
      return view('admins.manageServices',['services'=>$services]);
    }


}
