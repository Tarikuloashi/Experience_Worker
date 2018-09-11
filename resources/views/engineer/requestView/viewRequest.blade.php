

<!DOCTYPE html>

<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEngAosNykKT1a8LPDow36r8WPNmFYpVc&libraries=places"
  type="text/javascript"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
  	<style type="text/css">
    	#mymap {
      		border:2px solid red;
          margin-left: 50px;
      		width: 1000px;
      		height: 500px;
    	}
  	</style>
</head>
<body>
  <h1>Laravel  Multiple markers in google map </h1>
  <div id="mymap"></div>

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
				url:"view-Service//"+value.id,

	      click: function(e) {
	        // alert('This is '+value.id+',  from Bangladesh.');
					window.location.href = this.url;
	      }
	    });
   });
  </script>
</body>
</html>
