@extends('engineer.master')

@section('mainContent')


      <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Work History</h5>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="zero_config_length">
                          <label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>
                          <div class="col-sm-12 col-md-6">
                            <div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_config"></label></div></div></div><div class="row"><div class="col-sm-12">

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


                        						<tr>
                        								<td>{{$workHistory->id}}</td>
                        								<td>{{$workHistory->title}}</td>
                        								<td>{{$workHistory->description}}</td>
                        								<td>{{$workHistory->categoryName}}</td>
                        								<td>{{$workHistory->user_name}}</td>
                        								<td>{{$workHistory->email}}</td>
                        								<td>{{$workHistory->phone}}</td>
                        								<td>
                                            @if($workHistory->jobstatus=='no')<a href="{{url('/jobDone/'.$workHistory->id)}}"class="btn btn-success">Done</a>
                                            @else
                                            COMPLETE
                                            @endif
                        								</td>
                        						</tr>

                        				</table>
                              </div>
                            </div>
                                <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>

                        </div>
                    </div>
                  </div>
                </div>



@endsection
