@extends('user.master')

@section('mainContent')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFuy2ZyCtgb54dHAro5CZ7h1HhEmqddpM&libraries=places"
  type="text/javascript"></script>

  <style>
    #map-canvas{
      width: 650px;
      height: 350px;
    }
  </style>

<div class="row">
    <div class="col-md-8">
    <form action="/RequestService/Location" method="post">
		{{csrf_field()}}




	<div class="form-group">

				<input type="hidden" class="form-control input-sm" value="{{$service->id}}" name="serviceId">
			</div>


<div class="form-group">
				<label for="">Map</label>
				<input type="text" name="place" id="searchmap">
				<div id="map-canvas"></div>
			</div>

			<div class="form-group">
				<label for="">Lat</label>
				<input type="hidden" class="form-control input-sm" name="lat" id="lat">
			</div>

			<div class="form-group">
				<label for="">Lng</label>
				<input type="hidden" class="form-control input-sm" name="lng" id="lng">
			</div>

			<button class="btn btn-sm btn-danger">Save</button>
		</form>


    </div>
    <div class="col-md-2" style="float:right">
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    <h1>jsgxjsagc</h1>
    </div>
</div>




<!-- <div class="col-sm-12">

<div class="col-sm-6">



</div>
<div class="col-sm-6">


</div>






</div> -->


<script>


	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat: 27.72,
        	lng: 85.36
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
