@extends('engineer.master')

@section('mainContent')

<h2 class="text-center bg-primary p-2 mb-5 text-light shadow-lg">Personal Information</h2>
<div class="row bg-white p-3 m-3 shadow-lg rounded">


		<div class="col-md-6 mx-auto">

		<img class="rounded-circle" width="300" alt="User Pic" src="/uploads/avatars/{{$engineer->avatar}}" id="profile-image1" >
		<form enctype="multipart/form-data" action="/engineerUpdateImage" method="post">

				<input  type="file" name="avatar" required>
				<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
				<input type="submit" class="btn btn-sm btn-primary " value="Change Profile Image" onclick="return confirm('Are You Sure to Change Profile Picture');">
		</form>
		</div>
		<div class="col-md-6 ">
			<div class="card ">
				<div class="card-body">
					<div class="">
						<h4>Name:</h4>
						<span>{{$engineer->user_name}}</span>
					</div>
					<div class="">
						<h4>Email:</h4>
						<span>{{$engineer->email}}</span>
					</div>
					<div class="">
						<h4>Phone</h4>
						<span>{{$engineer->phone}}</span>
					</div>
					

				</div>

			</div>
		</div>




</div>





@endsection
