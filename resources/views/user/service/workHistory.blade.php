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
                        					<tr>
                        						<th>ID</th>
                        						<th>title</th>
                        						<th>User Description</th>
                        						<th>Category Name</th>
                        						<th>User Name</th>
                        						<th>User Email</th>
                        						<th>User Phone</th>


                        						<th>Job Status</th>


                        					</tr>

                                  @forelse($workHistorys as $workHistory)
                        						<tr>
                        								<td>{{$workHistory->id}}</td>
                        								<td>{{$workHistory->title}}</td>
                        								<td>{{$workHistory->description}}</td>
                        								<td>{{$workHistory->categoryName}}</td>
                        								<td>{{$workHistory->user_name}}</td>
                        								<td>{{$workHistory->email}}</td>
                        								<td>{{$workHistory->phone}}</td>

                        						</tr>
                                  @empty
                                  <tr>
                                    <td colspan="9" class="text-center"><h4>You have no History</h4></td>
                                  </tr>

                                  @endforelse
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
