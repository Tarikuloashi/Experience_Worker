

@extends('users.userMaster')

@section('title')
	User Profile
@endsection

@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEngAosNykKT1a8LPDow36r8WPNmFYpVc&libraries=places"
  type="text/javascript">

  </script>
  <script>
  // window.onload=geoFindMe;
// $( document ).ready(function() {
//     geoFindMe();
// });
// alert("You need to share Your Loacation"+geoFindMe());
</script>
    <!-- <button onclick="geoFindMe()">Show my location</button> -->
<div id="out"></div>

<div class="row" >
<div class="col-md-10">
  <h2 class="text-center text-success">{{Session::get('message')}}</h2>
  <form action="/saveRequest" method="POST">
    {{csrf_field()}}

    <div class="form-group">
      <label  class="col-sm-2 control-label">Sevice Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="serviceName" value="{{$serviceById->serviceName}}" readonly>
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-2 control-label">Service Price</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="servicePrice" value="{{$serviceById->servicePrice}}" readonly>
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <label  class=" col-sm-2 control-label">Service  Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="serviceDescription" rows="8" readonly>{{$serviceById->serviceDescription}}</textarea>
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <label  class=" col-sm-2 control-label">Add your service Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="userDescription" rows="8"></textarea>
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <label  class=" col-sm-2 control-label">Latitute</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lat" id="lat" >
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
        <label  class=" col-sm-2 control-label">Longtitude</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="lng" id="lng" >
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btn" class="btn btn-success btn-block"> Post Service Request</button>
      </div>
    </div>
  </form>
  </div>
</div>

<script>
document.body.onload=geoFindMe;
function geoFindMe() {

  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    document.getElementById("lat").value =latitude;
    document.getElementById("lng").value =longitude;

  }

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  navigator.geolocation.getCurrentPosition(success, error);
}
</script>
@endsection
