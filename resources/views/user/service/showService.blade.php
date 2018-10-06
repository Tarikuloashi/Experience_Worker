@extends('user.master')

@section('mainContent')

<div class="row">
    @foreach($services as $service)
    <div class="col-md-4  p-5 ">
        <div class="card card-hover">
            <div class="box bg-success text-center shadow-lg">
                <img class="m-3" src="{{asset($service->serviceImage)}}" alt="user" width="60px" height="50px" >
                <h6 class="text-white">{{$service->serviceName}}</h6>

                <a class="btn btn-dark text-light" data-toggle="modal" data-target="#serviceModal{{$service->id}}">Service Info</a>


            </div>
        </div>
    </div>
    @endforeach

    @foreach ($services as $service)
        <div class="modal fade" id="serviceModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
              <div class="modal-header ">
                <h2 class="modal-title mx-auto text-info">Service  Information</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{asset($service->serviceImage)}}" width="100%" height="300px">
                    </div>
                    <div class="col-md-6 ">
                        <h4 class="m-2"><span class="text-info">Category Name:</span> {{$service->categoryName}} </h4>
                        <hr>
                        <h4 class="m-2"><span class="text-info">Service Name:</span> {{$service->serviceName}} </h4>
                        <hr>
                        <h4 class="m-2 text-info">Service Details:</h4>
                        <p class="m-2">{{$service->serviceDescription}}</p>
                        <hr>
                        <h4 class="m-2 text-info">Pricing: </h4>
                        <h5 class="m-2" style="color:red"> Visiting Charge: {{$service->minPrice}} Taka.</h5>
                    </div>
                  </div>
             </div>
              <div class="modal-footer">
                <a class="btn btn-block btn-info m-3 shadow-lg" href="{{url('/requestService/'.$service->id)}}">Request Service</a>


              </div>
            </div>
          </div>
        </div>
    @endforeach


</div>








@endsection
