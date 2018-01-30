@extends('master')

@section('content')


	<div class="container ">
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-dark">
                <div class="panel-heading bg-primary">
                    <div class="panel-title">Login Form</div>
                </div>
               	<div class="panel-body bg-info">

					<form action="/forgetPassword" method="POST">
						{{csrf_field()}}
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
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>
						</div>

					<div class="form-group">
							<input type="submit" value="Send Mail" class="btn btn-success pull-right">
						</div>
					</form>
				</div>
            </div>
         </div>
    </div>

@endsection
