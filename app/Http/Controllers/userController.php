<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Image;
use File;
use App\User;

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




}
