@extends('admin.master')

@section('mainContent')

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center text-success">{{Session::get('message')}}</h2>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Manage All Service</h2>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                              <table class="table table-bordered table-hover">
                              	<thead>
                              		<tr>
                              			<th>Service Name</th>
                              			<th>Category Name</th>
                              			<th>Service Min Price</th>
                              			<th>Service  Max Price</th>
                              			<th>Action</th>
                              		</tr>
                              	</thead>
                              	<tbody>
                              		@foreach($services as $service)
                              		<tr>
                              			<th scope="row">{{$service->serviceName}}</th>
                              			<td>{{$service->categoryName}}</td>
                              			<td>{{$service->minPrice}}</td>
                              			<td>{{$service->maxPrice}}</td>
                              			<td class="text-center">
                              				<a href="{{url('/service/edit/'.$service->id)}}" class="btn btn-success btn-lg">
                              					<span class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit Service"> </span>
                              				</a>

                              				<a href="{{url('/service/delete/'.$service->id)}}" class="btn btn-danger btn-lg" onclick="return confirm('Are You Sure to delete this');">
                              					<span class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Delete Service"> </span>
                              				</a>
                                      <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#serviceModal{{$service->id}}">
                                        <span class="fas fa-eye text-light" data-toggle="tooltip" data-placement="top" title="View Service"> </span>
                                      </a>

                              			</td>
                              		</tr>
                              		@endforeach
                              	</tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                        </div>

                        </div>
                    </div>
                  </div>
                </div>
            </div>


            @foreach ($services as $service)
                <div class="modal fade" id="serviceModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document" >
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h2 class="modal-title mx-auto">Service  Information</h2>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6 ">
                                <img src="{{asset($service->serviceImage)}}" width="100%" height="300px">
                            </div>
                            <div class="col-md-6 ">
                                <h4 class="m-2">Service Name: {{$service->serviceName}} </h4>
                                <hr>
                                <h4 class="m-2">Service Details:</h4>
                                <p class="m-2">{{$service->serviceDescription}}</p>
                                <hr>
                                <h4 class="m-2">Minimum Price: </h4>
                                <h5 class="m-2 ">{{$service->minPrice}} Taka.</h5>
                                <hr>
                                <h4 class="m-2">Maximum Price: </h4>
                                <h5 class="m-2 ">{{$service->maxPrice}} Taka.</h5>
                            </div>
                          </div>
                     </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach


@endsection
