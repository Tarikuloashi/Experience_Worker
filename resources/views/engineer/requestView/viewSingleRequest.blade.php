@extends('engineer.master')

@section('mainContent')
<style>
        #map {
         height: 400px;
         width: 100%;
        }
   </style>

<div class="col-md-8 mx-auto" >
  <br>
    <div class="card shadow-lg "  >
        <div class="card-header text-center">
            <h2 class="card-title m-b-0">Service Information</h2>
        </div>
        <!-- service Image -->
        <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
            <div class="" style="float:left">
              <img src="{{asset($requestServiceById->serviceImage)}}" alt="user" height="400px">
            </div>
        </div>

        <!-- User Name -->
        <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
            <div class="d-flex flex-row comment-row m-t-0">
                <div class=" comment-text w-100">
                    <h4 class="font-medium text-primary">User Name:</h4>
                    <span class="d-block">{{$requestServiceById->user_name}}</span>
                </div>
            </div>
          </div>
          <!-- title   -->
        <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
            <div class="d-flex flex-row comment-row m-t-0">
                <div class=" comment-text w-100">
                    <h4 class="font-medium">Problem Title:</h4>
                    <span class="d-block">{{$requestServiceById->title}}</span>
                </div>
            </div>
          </div>
          <!-- Description -->
          <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
              <div class="d-flex flex-row comment-row m-t-0">
                  <div class=" comment-text w-100">
                      <h4 class="font-medium">Problem Description:</h4>
                      <span class="d-block">{{$requestServiceById->description}}</span>
                  </div>
              </div>
            </div>

            <!-- Service Name -->
            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class=" comment-text w-100">
                        <h4 class="font-medium">Service Name:</h4>
                        <span class="d-block">{{$requestServiceById->serviceName}}</span>
                    </div>
                </div>
              </div>

              <!-- Service Description -->
              <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
                  <div class="d-flex flex-row comment-row m-t-0">
                      <div class=" comment-text w-100">
                          <h4 class="font-medium">Service Description:</h4>
                          <span class="d-block">{{$requestServiceById->serviceDescription}}</span>
                      </div>
                  </div>
                </div>

                <!-- Service Min Price -->
                <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class=" comment-text w-100">
                            <h4 class="font-medium">Service Minimum Price:</h4>
                            <span class="d-block">{{$requestServiceById->minPrice}}</span>
                        </div>
                    </div>
                  </div>

                  <!-- Service Max Price -->
                  <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
                      <div class="d-flex flex-row comment-row m-t-0">
                          <div class=" comment-text w-100">
                              <h4 class="font-medium">Service Maximum Price:</h4>
                              <span class="d-block">{{$requestServiceById->maxPrice}}</span>
                          </div>
                      </div>
                    </div>

                    <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05" >
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class=" comment-text w-100">

                            </div>
                        </div>
                      </div>
                        <div id="map"></div>
                    @if($engineer!=null)
                    @if($engineer->jobstatus=='yes')
                    <a href="{{url('Appointment/service/'.$requestServiceById->serviceId)}}"class="btn btn-success">Accept Request</a>

                    @else
                    <a href="{{url('/workHistory')}}" class="m-3 font-weight-bold text-center">You already assign anothor work please see this.</a>

                    @endif
                    @else
                    <a href="{{url('Appointment/service/'.$requestServiceById->serviceId)}}"class="btn btn-success">Accept Request</a>

                    @endif

                  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                  <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                </div>
              </div>



              <script>
                  function initMap() {
                    var locations = {lat:{{$requestServiceById->lat}}, lng: {{$requestServiceById->long}}};
                    var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: locations});
                    var marker = new google.maps.Marker({position: locations, map: map});
                  }
              </script>

          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPj_Vqp4a327GenDZp9OcKi0mZ-3y6FQA&callback=initMap">
        </script>







@endsection
