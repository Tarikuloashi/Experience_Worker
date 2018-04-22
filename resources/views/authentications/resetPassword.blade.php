@extends('master')
@section('content')

	<div class="container ">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-dark">
                <div class="panel-heading bg-primary">
                    <div class="panel-title">Change Password</div>
                </div>
               	<div class="panel-body bg-info">

					<form action="" method="POST">
						{{csrf_field()}}
						<!-- ********************************* Message -->
            @if(count($errors) > 0)
								<div class="alert alert-danger bg-danger" >
									<ul>
										@foreach($errors->all() as $error)
										<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
						@endif

						<!-- ********************************* Message -->
            <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
						</div>

            <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmation Password " required>
							</div>
						</div>

					<div class="form-group">
							<input type="submit" value="Update Password" class="btn btn-success pull-right">
						</div>
					</form>
				</div>
            </div>
         </div>
    </div>

@endsection
