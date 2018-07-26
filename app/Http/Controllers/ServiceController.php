<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('publicationStatus',1)->get();
        return view('admins.service.createService',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $serviceImage=$request->file('serviceImage');
          	$name=$serviceImage->getClientOriginalName();
          	$uploadPath='productImage/';
          	$serviceImage->move($uploadPath,$name);
          	$imageUrl=$uploadPath.$name;
          	$this->saveServiceInfo($request,$imageUrl);
          	return redirect('service')->with('message','Service info Save successfully');
    }
    protected function saveServiceInfo($request,$imageUrl){
    	$service=new Service();
    	$service->serviceName=$request->serviceName;
    	$service->categoryid=$request->categoryid;
    	$service->minPrice=$request->minPrice;
    	$service->maxPrice=$request->maxPrice;
    	$service->serviceDescription=$request->serviceDescription;
    	$service->serviceImage=$request->serviceImage;

    	$service->save();

    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
