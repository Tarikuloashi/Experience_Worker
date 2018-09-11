@extends('master')

@section('content')


	<div class="container ">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-dark">
                <div class="panel-heading bg-primary">
                    <div class="panel-title">Sign Up</div>
                </div>
               	<div class="panel-body bg-info">

					<form action="/register" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="user_name" class="form-control" placeholder="User Name" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="number" name="phone" class="form-control" placeholder="Mobile Number" required>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Register" class="btn btn-success pull-right">
						</div>
					</form>
				</div>
            </div>
         </div>
    </div>

@endsection
