@extends('users.userMaster')

@section('title')
	User Profile
@endsection



@section('content')



<!-- <div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">  <h4 >User Profile</h4></div>
		<div class="panel-body">
			<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
				<img alt="User Pic" src="views/H_S/1.jpg" id="profile-image1" class="img-circle img-responsive">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
				<div class="container" >
					<h2>John Doe</h2>
					<p>an   <b> Employee</b></p>
				</div>
				<hr>
				<ul class="container details" >
					<li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>Bangladesh</p></li>
					<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>
				</ul>
				<hr>
				<div class="col-sm-5 col-xs-6 tital " >Date Of Joining: 15 Jun 2016</div>
			</div>
		</div>
	</div>
</div> -->

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">  <h4 >User Profile</h4></div>
		<div class="panel-body">
			<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4 text-center">
				<img alt="User Pic" src="views/H_S/1.jpg" id="profile-image1" class="img-circle img-responsive">
			</div>

			<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8 " >
				<div style="margin-left:10%" >
					<h2 class="text-primary "> {{$user->user_name}}</h2>
					<p>an   <b> User</b></p>
				</div>
				<hr>
				<ul  >
					<li class="list-group-item"><h3 class="bg-success" ><span class="glyphicon glyphicon-user one" ></span> Bangladesh</h3></li>
					<li class="list-group-item"><h3 class="bg-success"><span class="glyphicon glyphicon-envelope one"></span> {{$user->email}}</h3></li>
				</ul>
				<h3 style="margin-left:10%"  >Date Of Joining: 15 Jun 2016</h3>
				<hr>

			</div>
		</div>
	</div>
</div>





@endsection
