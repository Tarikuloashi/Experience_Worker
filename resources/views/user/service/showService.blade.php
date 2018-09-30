@extends('user.master')

@section('mainContent')

<div class="row">
    @foreach($services as $service)
    <div class="col-md-4  p-5 ">
        <div class="card card-hover">
            <div class="box bg-success text-center shadow-lg">
                <img class="m-3" src="{{asset($service->serviceImage)}}" alt="user" width="60px" height="50px" >
                <h6 class="text-white">{{$service->serviceName}}</h6>
                <a href="{{url('/user/serviceDetails/'.$service->id)}}" class="btn btn-sm btn-success font-weight-bold" >View Details</a>
            </div>
        </div>
    </div>
    @endforeach

</div>








@endsection
