<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Image;
use File;
use App\User;

class engineerController extends Controller
{
    public function home(){
    	return view('engineer.home.homeContent');
    }
    public function profile(){
      $engineer = Sentinel::getUser();
    	return view('engineer.profile.engineerProfile',['engineer'=>$engineer]);
    }

    public function update_avatar(Request $request){
      //Handle the User Upload of avatar
      $engineer =User::find(Sentinel::getUser()->id);
      if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename =time() . '.'. $avatar->getClientOriginalExtension();

          //Delete current image before uploading new image
          if($engineer->avatar !== 'default.jpg'){
            $file='uploads/avatars/'.$engineer->avatar;
              if(File::exists($file)){
                unlink($file);
              }
          }
          // Resize image and store image
          Image::make($avatar)->resize(500, 500)->save('uploads/avatars/'.$filename);

          $engineer = Sentinel::getUser();
          $engineer->avatar = $filename;
          $engineer->save();
        }
      //  return view('users.userProfile', array('user' => Sentinel::getUser()));
      return redirect('/engineerProfile');
    }



}
