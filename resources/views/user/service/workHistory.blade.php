@extends('user.master')

@section('mainContent')


      <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Work History</h3>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row"><div class="col-sm-12">

                                <table class="table table-striped">
                                  which not accepted
                        					<tr>
                        						<th>ID</th>
                        						<th>title</th>
                        						<th>User Description</th>
                        						<th>Category Name</th>
                        						<th>Engineer Name</th>
                        						<th>Engineer Email</th>
                        						<th>Engineer Phone</th>


                        						<th>Job Status</th>


                        					</tr>

                                  @foreach($workHistoryAccepted as $accepted)
                        						<tr>
                        								<td>{{$accepted->id}}</td>
                        								<td>{{$accepted->title}}</td>
                        								<td>{{$accepted->description}}</td>
                        								<td>{{$accepted->categoryName}}</td>
                        								<td>{{$accepted->user_name}}</td>
                        								<td></td>
                        								<td></td>
                        								<td></td>

                        						</tr>
                                    @endforeach
                                    @foreach($workHistoryNotAccepted as $notAccepted)
                                      <tr>
                                          <td>{{$notAccepted->id}}</td>
                                          <td>{{$notAccepted->title}}</td>
                                          <td>{{$notAccepted->description}}</td>
                                          <td>{{$notAccepted->categoryName}}</td>
                                          <td>{{$notAccepted->serviceName}}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>

                                      </tr>
                                    @endforeach
                                  

                        				</table>


                              </div>
                            </div>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>



@endsection
