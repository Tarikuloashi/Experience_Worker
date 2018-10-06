<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Image;
use File;
use App\User;
use DB;
use App\Service;
use App\Category;
use App\RequestService;
use App\ServiceLocation;
use App\serviceApponment;
use App\EngineersProfile;


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

    public function workHistory(){
      $workHistorys=DB::table('service_apponments')
                    ->join('request_services','service_apponments.serviceid','=','request_services.id')
                    ->join('categories','request_services.categoryId','=','categories.id')
                    ->join('services','request_services.serviceId','=','services.id')
                    ->join('users','request_services.userId','=','users.id')
                    ->select('request_services.*','categories.*','services.*','users.*','service_apponments.*')
                    ->where('service_apponments.engineerid',Sentinel::getUser()->id)
                    ->get();
                  //  dd($workHistory);
                return view('engineer.requestView.workHistory',compact('workHistorys'));


    }

    public function jobDone($id){
      $jobDone=serviceApponment::where('id',$id)->first();
      $jobDone->jobstatus='yes';
      $jobDone->save();
      return redirect()->back()->with('message','Your Job is Done');
    }

    public function addProfile(){
      return view('engineer.profile.addProfile');
    }
    public function saveProfile(Request $request){

    	$profile=new EngineersProfile();
    	$profile->description=$request->description;
    	$profile->skills=$request->skills;
      $profile->status=1;
    	$profile->save();
    	return redirect('engineer.profile.engineerProfile')->with('message','Profile create successful');

    }
















}
