@extends('admins.adminMaster')

@section('title')
	Engineer History
@endsection

@section('content')

	<h2 class="text-danger">Engineer List</h2>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Engineer Name</th>
						<th>Engineer email</th>
						<th>Engineer Login</th>
						<th>Action</th>
					</tr>

					@foreach($engineers as $engineer)
						<tr>
								<td>{{$engineer->id}}</td>
								<td>{{$engineer->user_name}}</td>
								<td>{{$engineer->email}}</td>
								<td>{{$engineer->last_login}}</td>
								<td>
									<a href="/adminEngineerList/{{$engineer->id}}"><span class="glyphicon glyphicon-arrow-down">Demotion to user</span></a>
								</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
@endsection
