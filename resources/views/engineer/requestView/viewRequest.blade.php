@extends('engineer.master')

@section('mainContent')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFuy2ZyCtgb54dHAro5CZ7h1HhEmqddpM&libraries=places"
  type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

	<style type="text/css">
    	#mymap {

      		width: 99%;
      		height: 515px;
    	}
  	</style>
		<div class="row">
		    <div class="col-md-12">
					  <div id="mymap" class="shadow-lg"></div>
						<br>
				</div>
		</div>

<script type="text/javascript">
  var locations = <?php print_r(json_encode($locations)) ?>;
  var mymap = new GMaps({
    el: '#mymap',
    lat: 23.7464653,
    lng: 90.3760125,

    zoom:14
  });
  $.each( locations, function( index, value ){
    mymap.addMarker({

      lat: value.lat,
      lng: value.long,
      title: value.title,
			url:"view-Service/"+value.id,
			content: value.serviceDetails,


      click: function(e) {
        // alert('This is '+value.id+',  from Bangladesh.');
				 window.location.href = this.url;


      }


    });
 });
</script>

@endsection
