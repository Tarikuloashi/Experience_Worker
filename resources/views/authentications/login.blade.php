@extends('authentications.master')

@section('content')

<div class="agileits">
	<div class="w3-agileits-info">

		<form class="form animate-form" id="form1" action="/login" method="POST">
			{{csrf_field()}}
			<p class="w3agileits">Login Here</p>

				<!-- ********************************* Message -->
				@if(session('error'))
					<div class="alert alert-danger bg-success" >
						{{session('error')}}
					</div>
				@endif

				@if(session('success'))
					<div class="alert alert-success bg-success" >
						{{session('success')}}
					</div>
				@endif
				<!-- ********************************* Message -->

			<div class="form-group has-feedback wthree">
				<label class="control-label sr-only" for="email">Email address</label>
				<input class="form-control" id="email" name="email" placeholder="example@example.com" type="email" required>
				<span class='glyphicon glyphicon-ok form-control-feedback'></span>
			</div>

			<div class="form-group has-feedback agile">
				<label class="control-label sr-only" for="password">Password</label>
				<input class="form-control w3l" id="password" name="password" placeholder="Password" type="password">
				<span class="glyphicon glyphicon-ok form-control-feedback"></span>
			</div>

			<div class='submit w3-agile'>
				<input class='btn btn-lg' type='submit' value="Sign In">
			</div>
			<br>
			<span>Create Account<a href="{{url('/register')}}"> Register</a> </span>
			<br>
			<span><a href="/forgetPassword" >Forget My Password</a> </span>
		</form>
	</div>
</div>



@endsection
