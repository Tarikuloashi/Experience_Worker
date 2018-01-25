@extends('users.userMaster')

@section('title')
	User Profile
@endsection



@section('content')


<div class="container">
	<div class="col-md-10">


	<div class="jumbotron">
		<h1>{{$user->email}}</h1>
	<h1>{{$user->user_name}}</h1>
	<h1>user</h1>
	</div>
	</div>
</div>

@endsection
