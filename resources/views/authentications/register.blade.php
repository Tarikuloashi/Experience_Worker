@extends('authentications.master')

@section('content')
		<div class="agileits">
			<div class="w3-agileits-info">

				<form class="form animate-form" id="form1" action="/register" method="POST">
					{{csrf_field()}}
					<p class="w3agileits">SignUp Here</p>

					<div class="form-group has-feedback wthree">
						<label class="control-label sr-only" for="email">Email address</label>
						<input class="form-control" id="email" name="email" placeholder="example@example.com" type="email" required>
						<span class='glyphicon glyphicon-ok form-control-feedback'></span>
					</div>

					<div class="form-group has-feedback w3ls">
						<label class="control-label sr-only" for="username">User Name</label>
						<input class="form-control" id="username" name="user_name" placeholder="User Name" type="text" required>
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback w3ls">
						<label class="control-label sr-only" for="mobilenumber">Mobile Number</label>
						<input class="form-control" id="phone" name="phone" placeholder="Mobile Number" type="number" required>
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback agile">
						<label class="control-label sr-only" for="password">Password</label>
						<input class="form-control w3l" id="password" name="password" placeholder="Password" type="password">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>

					<div class="form-group has-feedback agile">
						<label class="control-label sr-only" for="password">Confirm Password</label>
						<input class="form-control w3l" id="password" name="password" placeholder="Confirm Password" type="password">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>


					<div class='submit w3-agile'>
						<input class='btn btn-lg' type='submit' value="Register">
					</div>
					<br>
					<span>Already have an account ?<a href="{{url('/login')}}"> Login</a> </span>
				</form>
			</div>
		</div>


@endsection
