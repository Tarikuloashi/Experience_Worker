<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;
use DB;
class ServiceController extends Controller
{
    public function create()
    {
        $categories=Category::where('publicationStatus',1)->get();
        return view('admin.service.createService',['categories'=>$categories]);
    }

    public function store(Request $request){
      
            $serviceImage=$request->file('serviceImage');
          	$name=$serviceImage->getClientOriginalName();
          	$uploadPath='serviceImage/';
          	$serviceImage->move($uploadPath,$name);
          	$imageUrl=$uploadPath.$name;
          	$this->saveServiceInfo($request,$imageUrl);
          	return redirect('service/add')->with('message','Service info Save successfully');
    }
            protected function saveServiceInfo($request,$imageUrl){
            	$service=new Service();
            	$service->serviceName=$request->serviceName;
            	$service->categoryid=$request->categoryid;
            	$service->minPrice=$request->minPrice;
            	$service->maxPrice=$request->maxPrice;
            	$service->serviceDescription=$request->serviceDescription;
            	$service->serviceImage=$imageUrl;
      	      $service->save();

    }
    public function manage(){
      $services=DB::table('services')
                    ->join('categories','services.categoryid','=','categories.id')
                    ->select('services.id','services.serviceName','services.minPrice','services.maxPrice','categories.categoryName','categories.categoryDescription')
                    ->get();

        return view ('admin.service.manageService',['services'=>$services]);
    }

}
