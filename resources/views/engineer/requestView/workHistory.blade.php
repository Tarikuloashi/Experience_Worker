@extends('engineer.master')

@section('mainContent')
      <div class="row">
        <div class="col-md-12 ">
          <div class="card ">
            <div class="card-body">
              <h2 class="card-title text-center border-bottom">Work History</h2>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                            <div class="row">
                              <div class="col-md-8 mx-auto">

                                <table class="table table-bordered table-hover">
                                  <thead>
                        					<tr class="font-weight-bold">
                        						<th class="font-weight-bold">Problem Title</th>
                        						<th class="font-weight-bold">Problem Description</th>
                        						<th class="font-weight-bold">User </th>
                        						<th class="font-weight-bold">Service</th>
                        						<th class="font-weight-bold">Job Status</th>

                        					</tr>
                                </thead>
                                <tbody>
                                  @forelse($workHistorys as $workHistory)
                        						<tr>
                        								<td>{{$workHistory->title}}</td>
                        								<td>{{$workHistory->description}}</td>
                        								<td><a class="btn btn-dark text-light" data-toggle="modal" data-target="#userinfo{{$workHistory->id}}">User Info</a></td>
                        								<td><a class="btn btn-dark text-light" data-toggle="modal" data-target="#serviceModal{{$workHistory->id}}">Service Info</a></td>
                        								<td>
                                            @if($workHistory->jobstatus=='no')<a href="{{url('/jobDone/'.$workHistory->id)}}"class="btn btn-success">Done</a>
                                            @else
                                            COMPLETE
                                            @endif
                        								</td>
                        						</tr>
                                  @empty
                                  <tr>
                                    <td colspan="9">You have no service</td>
                                  </tr>
                                </tbody>
                                  @endforelse
                        				</table>
                              </div>
                            </div>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>
                  <br><br><br>
                </div>


                @foreach ($workHistorys as $workHistory)
                    <div class="modal fade" id="serviceModal{{$workHistory->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document" >
                        <div class="modal-content">
                          <div class="modal-header ">
                            <h2 class="modal-title mx-auto">Service  Information</h2>
                            <span class="float-r bg-success p-2 text-light">Job ID:<span class="font-weight-bold">35653{{$workHistory->id}}</span></span>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6 ">
                                    <img src="{{asset($workHistory->serviceImage)}}" width="100%" height="300px">
                                </div>
                                <div class="col-md-6 ">
                                    <h4 class="m-2">Service Name: {{$workHistory->serviceName}} </h4>
                                    <hr>
                                    <h4 class="m-2">Service Details:</h4>
                                    <p class="m-2">{{$workHistory->serviceDescription}}</p>
                                    <hr>
                                    <h4 class="m-2">Pricing: </h4>
                                    <h5 class="m-2 text-danger"> Visiting Charge: {{$workHistory->minPrice}} Taka.</h5>
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

                @foreach ($workHistorys as $workHistory)
                    <div class="modal fade bd-example-modal-sm" id="userinfo{{$workHistory->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document" >
                        <div class="modal-content">
                          <div class="modal-header ">
                            <h4 class="modal-title mx-auto">User  Information</h4>

                          </div>
                          <div class="modal-body">
                            <div class=" text-center">


                            <img class="rounded-circle mb-2" width="200" src="/uploads/avatars/{{$workHistory->avatar}}" >
                            <h3 class="text-primary">{{$workHistory->user_name}}</h3>
                            </div>
                            <h4 class="bg-warning p-2 text-dark"><i class="mdi mdi-email lg"></i> {{$workHistory->email}}</h4>
                            <h4 class="bg-warning p-2 text-dark"><i class="mdi mdi-cellphone lg"></i> {{$workHistory->phone}}</h4>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach

@endsection
