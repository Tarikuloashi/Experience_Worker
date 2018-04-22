@extends('users.userMaster')

@section('title')
	User Profile
@endsection

@section('content')

	<h2 class="text-danger">Service List</h2>
			<div class="row">


			<div class="col-md-10">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Service Name</th>
						<th>Service Price</th>
						<th>Service Description</th>
            <th>Action</th>
					</tr>

					@foreach($services as $service)
						<tr>
								<td>{{$service->id}}</td>
								<td>{{$service->serviceName}}</td>
								<td>{{$service->servicePrice}} Taka</td>
								<td>{{$service->serviceDescription}}</td>
                <td>
									<a href="#"><span class="glyphicon glyphicon-arrow-up">Post Service</span></a>
								</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
@endsection
