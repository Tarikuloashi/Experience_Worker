<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Image;
use File;
use App\User;
use App\Service;

class userController extends Controller
{
    public function home(){
      $user =Sentinel::getUser();
    	return view('users.userHome',['user'=>$user]);
    }
    public function profile(){
      // $id=Sentinel::getUser();<nav class="navbar  navbar-fixed-top">
      <div class="container-fluid ">
         <div class="navbar-header fixed">
             <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                 <i class="glyphicon glyphicon-align-left">H</i>
                 <span></span>
             </button>
         </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-right">
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="position:relative; padding-left:50px;">
                   <img src="/uploads/avatars/{{$user->avatar}}" style="width:32px; height:32px; positionn:absolute; top:10px; left:10px; border-radius:50%;">
                   {{ $user->user_name }}
                 </a>

      // $user = Sentinel::findById($id);
      $user =Sentinel::getUser();
      // return view('users.userProfile',['user' =>$user]);
    	 return view('users.userProfile',['user'=>$user]);
    }

    public function update_avatar(Request $request){
      //Handle the User Upload of avatar
      $user =User::find(Sentinel::getUser()->id);
      if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename =time() . '.'. $avatar->getClientOriginalExtension();

          //Delete current image before uploading new image
          if($user->avatar !== 'default.jpg'){
            $file='uploads/avatars/'.$user->avatar;
              if(File::exists($file)){
                unlink($file);
              }
          }
          // Resize image and store image
          Image::make($avatar)->resize(500, 500)->save('uploads/avatars/'.$filename);

          $user = Sentinel::getUser();
          $user->avatar = $filename;
          $user->save();
        }
      //  return view('users.userProfile', array('user' => Sentinel::getUser()));
      return redirect('/userProfile');
    }


    public function post(){
    	return view('users.userPost');
    }
    public function history(){
    	return view('users.userHistory');
    }

    public function showService(){
      $services=Service::all();
      return view('users.showService',['services'=>$services]);
    }



}
