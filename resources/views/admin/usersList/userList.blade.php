@extends('admin.master')

@section('mainContent')


      <div class="row">
        <div class="col-md-12">

          <div class="card shadow-lg">
            <div class="card-body">
              <h2 class="card-title text-center ">All User List</h2>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table table-bordered table-hover">
                        					<tr>
                        						<th>ID</th>
                        						<th>Name</th>
                        						<th>Email</th>
                        						<th>Phone Number</th>
                        						<th>Last Login</th>
                        						<th>Action</th>
                        					</tr>

                        					@foreach($users as $user)
                        						<tr>
                        								<td>{{$user->id}}</td>
                        								<td>{{$user->user_name}}</td>
                        								<td>{{$user->email}}</td>
                        								<td>{{$user->phone}}</td>
                        								<td>{{$user->last_login}}</td>
                        								<td>
                                          <button type="button" class="btn btn-warning">
                        									<a href="/adminUserList/{{$user->id}}"><i class="mdi mdi-account-convert"> </i><span></span></a></button>
                        								</td>
                        						</tr>
                        					@endforeach
                        				</table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br><br><br><br><br><br><br>
                  </div>
                </div>



@endsection
