@extends('admins.adminMaster')

@section('title')
	Services List
@endsection

@section('content')

	<h2 class="text-danger">Services List</h2>
			<div class="row">


			<div class="col-md-10">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Service Name</th>
						<th>Service Price</th>
						<th>Service Description</th>

					</tr>

					@foreach($services as $service)
						<tr>
								<td>{{$service->id}}</td>
								<td>{{$service->serviceName}}</td>
								<td>{{$service->servicePrice}}</td>
								<td>{{$service->serviceDescription}}</td>
								
						</tr>
					@endforeach
				</table>

			</div>
		</div>
@endsection
