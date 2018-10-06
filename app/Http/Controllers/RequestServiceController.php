<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;
use App\RequestService;
use Sentinel;
use DB;
use App\ServiceLocation;
use App\serviceApponment;



class RequestServiceController extends Controller
{
  public function index($id){
    $serviceById=Service::where('id',$id)->first();
    //dd($serviceById);
    return view('user.service.requestService',compact('serviceById'));
  }


  public function storeRequest(Request $request){
      // return $request->all();
      $service = new RequestService();
      $service->title = $request->title;
      $service->userId = Sentinel::getUser()->id;
      $service->categoryId = $request->category;
      $service->serviceId = $request->service;
      $service->description = $request->description;
      $service->save();

      $data=DB::table('request_services')
                    ->join('categories','request_services.categoryId','=','categories.id')
                    ->join('services','request_services.serviceId','=','services.id')
                    ->select('request_services.*','services.*','categories.*')
                    ->where('request_services.id',$service->id)
                    ->first();

      return view('user.service.postLocation',compact('data','service'))->with('message','Service Request Successfully Post,Please Confirm');


  }

  public function storeLoction(Request $request){
    $serviceLocation = new serviceLocation();
    $serviceLocation->lat = $request->lat;
    $serviceLocation->long = $request->lng;
    $serviceLocation->serviceId = $request->serviceId;
    $serviceLocation->publicationStatus = 1;
    $serviceLocation->save();
    return redirect('/user/workHistory');
  }

  public function viewRequest(){
    $locations=DB::table('request_services')

                  ->join('service_locations','request_services.id','=','service_locations.serviceId')
                  ->select('request_services.*','service_locations.*')
                  ->where('service_locations.publicationStatus',1)
                  ->get();

                //  dd($locations);

   return view('engineer.requestView.viewRequest',compact('locations'));
 }


 public function showService($id){
   $requestServiceById=DB::table('service_locations')

                 ->join('request_services','service_locations.serviceId','=','request_services.id')
                 ->join('services','request_services.serviceId','=','services.id')
                 ->join('categories','request_services.categoryId','=','categories.id')
                 ->join('users','request_services.userId','=','users.id')
                 ->select('request_services.*','categories.*','services.*','users.*','service_locations.*')
                 ->where('service_locations.publicationStatus', 1)
                 ->where('service_locations.id', $id)
                 ->first();


              $engineer=serviceApponment::where('engineerid',Sentinel::getUser()->id)
                  ->orderby('id','desc')
                  ->first();

                 if(!empty($engineer)){
                   return view('engineer.requestView.viewSingleRequest',compact('requestServiceById','engineer'));
                 }
                 else{
                   $engineer=null;
                   return view('engineer.requestView.viewSingleRequest',compact('requestServiceById','engineer'));
                 }

               //dd($engineer);

}

}
