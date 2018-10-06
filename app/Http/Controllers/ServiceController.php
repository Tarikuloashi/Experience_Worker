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
          	return redirect('service/manage')->with('message','Service info Save successfully');
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
                    ->orderby('services.id','desc')
                    ->join('categories','services.categoryid','=','categories.id')
                    ->select('categories.*','services.*')
                    ->get();

        return view ('admin.service.manageService',['services'=>$services]);
    }

    public function edit($id){
        $categories = Category::where('publicationStatus',1)->get();
        $serviceById=Service::where('id',$id)->first();

        return view('admin.service.editService',['serviceById'=>$serviceById,'categories'=>$categories]);
    }

    public function update(Request $request){
      // dd($request->all());
      $imageUrl=$this->imageExistStatus($request);
        $serviceup=Service::find($request->id);
        $serviceup->serviceName=$request->serviceName;
        $serviceup->categoryid=$request->categoryid;
        $serviceup->minPrice=$request->minPrice;
        $serviceup->maxPrice=$request->maxPrice;
      	$serviceup->serviceDescription=$request->serviceDescription;
        $serviceup->serviceImage=$imageUrl;
         //dd($serviceup);
        $serviceup->save();
        return redirect('/service/manage')->with('message','Service Info update Successfully');

    }

    private function imageExistStatus($request){
        $serviceById=Service::where('id',$request->id)->first();
        $serviceImage=$request->file('serviceImage');
        if($serviceImage){
            unlink($serviceById->serviceImage);
            $name=$serviceImage->getClientOriginalName();
            $uploadPath='serviceImage/';
            $serviceImage->move($uploadPath,$name);
          	$imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$serviceById->serviceImage;
        }
        return $imageUrl;

    }

    public function delete($id){

     $service = Service::find($id);
     $service->delete();
     return redirect('/service/manage')->with('message','Service Info delete successfully');

    }


}
