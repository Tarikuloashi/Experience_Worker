@extends('users.userMaster')

@section('title')
	User Profile
@endsection

@section('content')

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">  <h4 >User Profile</h4></div>
		<div class="panel-body">
			<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4 text-center">
<!-- ****************************** profile image -->
				<img alt="User Pic" src="/uploads/avatars/{{$user->avatar}}" id="profile-image1" class="img-circle img-responsive">
				<form enctype="multipart/form-data" action="/userUpdateImage" method="post">
            <!-- <label>Update Profile Image</label> -->
            <input  type="file" name="avatar">
            <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
            <input type="submit" class="pull-center btn btn-sm btn-primary" value="Change Profile Image">
        </form>
<!-- ****************************** profile image -->
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
					<li></li>
				</ul>
				<h3 style="margin-left:10%"  >Date Of Joining: 15 Jun 2016</h3>
				<hr>

			</div>
		</div>
	</div>
</div>





@endsection
