@extends('user.master')

@section('mainContent')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFuy2ZyCtgb54dHAro5CZ7h1HhEmqddpM&libraries=places"
  type="text/javascript"></script>

  <style>
    #map-canvas{
      width: 100%;
      height: 400px;
    }
  </style>

<div class="row">
    <div class="col-md-7">
        <form action="/RequestService/Location" method="post" >
    		{{csrf_field()}}

          <div class="form-group">
             <input type="hidden" class="form-control input-sm" value="{{$service->id}}" name="serviceId">
          </div>

          <div class="form-group ">
      				<h2 class="text-center">Please search your Location:</h2>
      				<input class="form-control" type="text" name="place" id="searchmap">
              <br>
      				<div id="map-canvas" class="shadow-lg"></div>
    			</div>

    			<div class="form-group ">
      				<!-- <label for="">Lat</label> -->
      				<input type="hidden" class="form-control input-sm" name="lat" id="lat">
    			</div>

    			<div class="form-group">
      				<!-- <label for="">Lng</label> -->
      				<input type="hidden" class="form-control input-sm" name="lng" id="lng">
    			</div>

    			<button class="btn btn-md btn-primary btn-block">Posting Your Request</button>
    		</form>
    </div>
    <div class="col-md-5" style="float:right">
      <br><br>
        <div class="card shadow-lg "  >
            <div class="card-body">
                <h3 class="card-title text-center">Service & Request Information</h3>
            </div>
            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="4a675286-7fdf-e6d1-771b-fff5660d5e05">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Request Title</h4>
                        <h5 class="d-block">{{$service->title}}</h5>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Request Description:</h4>
                        <h5 class="d-block">{{$service->description}}</h5>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Service Name:</h4>
                        <h5 class="d-block">{{$data->serviceName}}</h5>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Service Description:</h4>
                        <h5 class="d-block">{{$data->serviceDescription}}</h5>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Service Maximum Price:</h4>
                        <h5 class="d-block">{{$data->maxPrice}}</h5>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="comment-text w-100">
                        <h4 class="text-primary font-weight-bold">Service Minimum Price:</h4>
                        <h5 class="d-block">{{$data->minPrice}}</h5>
                    </div>
                </div>
            </div>
                <!-- Comment Row -->

              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
              <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
        </div>
    </div>


    </div>



<script>

	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
      lat: 23.7464653,
      lng: 90.3760125,
		},
		zoom:15
	});

	var marker = new google.maps.Marker({
		position: {
			lat: 27.72,
        	lng: 85.36
		},
		map: map,
		draggable: true
	});

	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

	google.maps.event.addListener(searchBox,'places_changed',function(){

		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;

		for(i=0; place=places[i];i++){
  			bounds.extend(place.geometry.location);
  			marker.setPosition(place.geometry.location); //set marker position new...
  		}

  		map.fitBounds(bounds);
  		map.setZoom(15);

	});

	google.maps.event.addListener(marker,'position_changed',function(){

		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();

		$('#lat').val(lat);
		$('#lng').val(lng);

	});

</script>

@endsection
