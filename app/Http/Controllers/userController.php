<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Image;
use File;
use App\User;
use App\Service;
use App\serviceRequest;
use DB;

class userController extends Controller
{
    public function home(){
    //  $user =Sentinel::getUser();
    //  dd($user);
    	return view('user.home.homeContent');
    }
    public function profile(){


      // $user = Sentinel::findById($id);
      $user =Sentinel::getUser();
      // return view('users.userProfile',['user' =>$user]);
    	 return view('user.profile.userProfile',['user'=>$user]);
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


    // public function post(){
    // 	return view('users.userPost');
    // }
    // public function history(){
    // 	return view('users.userHistory');
    // }
    //
    // public function showService(){
    //   $services=Service::all();
    //   return view('users.showService',['services'=>$services]);
    // }
    //
    // public function postRequest($id){
    //   $serviceById=Service::where('id',$id)->first();
    //   return view('users.postRequest',['serviceById'=>$serviceById]);
    // }
    //
    // public function saveRequest(Request $request){
    //   $allServiceRequest=new serviceRequest();
    //   $allServiceRequest->userId=Sentinel::getUser()->id;
    //   $allServiceRequest->serviceName=$request->serviceName;
    //   $allServiceRequest->servicePrice=$request->servicePrice;
    //   $allServiceRequest->serviceDescription=$request->serviceDescription;
    //   $allServiceRequest->userDescription=$request->userDescription;
    //   $allServiceRequest->lat=$request->lat;
    //   $allServiceRequest->lng=$request->lng;
    //   $allServiceRequest->save();
    //   return redirect('users/userShowService')->with('message','Service Request Post successfully');
    //     // // echo '<pre>';
    //     // // print_r($user);
    //     // // exit();
    //     // echo $allServiceRequest;
    //
    // }



}
