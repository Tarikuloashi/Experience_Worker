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

                                <table class="table table-hover table-info">
                                  <thead>
                        					<tr class="font-weight-bold">
                        						<th class="font-weight-bold">title</th>
                        						<th class="font-weight-bold">Category Name</th>
                        						<th class="font-weight-bold">User Name</th>
                        						<th class="font-weight-bold">View Details</th>
                        						<th class="font-weight-bold">Job Status</th>

                        					</tr>
                                </thead>
                                <tbody>
                                  @forelse($workHistorys as $workHistory)
                        						<tr>
                        								<td>{{$workHistory->title}}</td>
                        								<td>{{$workHistory->categoryName}}</td>
                        								<td>{{$workHistory->user_name}}</td>
                        								<td><a class="btn btn-dark text-light" data-toggle="modal" data-target="#mymodal{{$workHistory->id}}">View</a></td>
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
                    <div class="modal " id="mymodal{{$workHistory->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document" >
                        <div class="modal-content">
                          <div class="modal-header ">
                            <h4 class="modal-title mx-auto">Service Request Information</h4>
                            <span class="float-r bg-success p-2 text-light">Job ID:<span class="font-weight-bold">35653{{$workHistory->id}}</span></span>
                          </div>
                          <div class="modal-body">

                            <div class="row">
                              <div class="col-md-4">
                                    <div class="pt-3 bg-light border-bottom border-dark">
                                        <div class="comment-text w-100">
                                            <h4 class="text-primary font-weight-bold">Request Title</h4>
                                            <h5 class="d-block">  {{$workHistory->title}}</h5>
                                        </div>
                                    </div>

                                    <div class="pt-3 bg-light border-bottom border-dark">
                                        <div class="comment-text w-100">
                                            <h4 class="text-primary font-weight-bold">Request Description:</h4>
                                            <h5 class="d-block">{{$workHistory->description}}</h5>
                                        </div>
                                    </div>
                              </div>
                              <div class="col-md-4">

                                    <div class="pt-3 bg-light border-bottom border-dark">
                                        <div class="comment-text w-100">
                                            <h4 class="text-primary font-weight-bold">User Name:</h4>
                                            <h5 class="d-block">{{$workHistory->user_name}}</h5>
                                        </div>
                                    </div>

                                    <div class="pt-3 bg-light border-bottom border-dark">
                                        <div class="comment-text w-100">
                                            <h4 class="text-primary font-weight-bold">User Email:</h4>
                                            <h5 class="d-block">{{$workHistory->email}}</h5>
                                        </div>
                                    </div>

                                    <div class="pt-3 bg-light border-bottom border-dark">
                                        <div class="comment-text w-100">
                                            <h4 class="text-primary font-weight-bold">User Email:</h4>
                                            <h5 class="d-block">{{$workHistory->phone}}</h5>
                                        </div>
                                    </div>


                              </div>
                              <div class="col-md-4">
                                <div class="pt-3 bg-light border-bottom border-dark">
                                    <div class="comment-text w-100">
                                        <h4 class="text-primary font-weight-bold">Service Name:</h4>
                                        <h5 class="d-block">{{$workHistory->serviceName}}</h5>
                                    </div>
                                </div>
                                <div class="pt-3 bg-light border-bottom border-dark">
                                    <div class="comment-text w-100">
                                        <h4 class="text-primary font-weight-bold">Service Description:</h4>
                                        <h5 class="d-block">{{$workHistory->serviceDescription}}</h5>
                                    </div>
                                </div>
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
