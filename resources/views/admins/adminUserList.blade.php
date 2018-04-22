@extends('admins.adminMaster')

@section('title')
	User History
@endsection

@section('content')

	<h2 class="text-danger">User List</h2>
			<div class="row">


			<div class="col-md-10">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>User Name</th>
						<th>User email</th>
						<th>Last Login</th>
						<th>Action</th>
					</tr>

					@foreach($users as $user)
						<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->user_name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->last_login}}</td>
								<td>
									<a href="/adminUserList/{{$user->id}}"><span class="glyphicon glyphicon-arrow-up">upgrade</span></a>
								</td>
						</tr>
					@endforeach
				</table>

			</div>
		</div>
@endsection
