<?php

namespace App\Http\Controllers;

use App\serviceApponment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use App\RequestService;
use App\ServiceLocation;

class ServiceApponmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apponment($id)
    {
        // return $id;
        $apponment=new serviceApponment();
        $apponment->serviceid=$id;
        $apponment->engineerid=Sentinel::getUser()->id;
        $apponment->save();

        $service=ServiceLocation::where('serviceId',$id)->first();
        $service->publicationStatus=0;
        $service->save();
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\serviceApponment  $serviceApponment
     * @return \Illuminate\Http\Response
     */
    public function show(serviceApponment $serviceApponment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serviceApponment  $serviceApponment
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceApponment $serviceApponment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serviceApponment  $serviceApponment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceApponment $serviceApponment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serviceApponment  $serviceApponment
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceApponment $serviceApponment)
    {
        //
    }
}
