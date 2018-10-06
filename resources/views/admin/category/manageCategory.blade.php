@extends('admin.master')

@section('mainContent')

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center text-success">{{Session::get('message')}}</h2>
          <div class="card shadow-lg">
            <div class="card-body">

              <h2 class="card-title text-center">Manage All Category</h2>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row"><div class="col-sm-12">
                              <table class="table table-bordered table-hover">
                              	<thead>
                              		<tr>
                              			<th>ID</th>
                              			<th>Category Name</th>
                              			<th>Category Description</th>
                              			<th>Publication Status</th>
                              			<th>Action</th>
                              		</tr>
                              	</thead>
                              	<tbody>
                              		@foreach($categories as $category)
                              		<tr>
                              			<th scope="row">{{$category->id}}</th>
                              			<td>{{$category->categoryName}}</td>
                              			<td>{{$category->categoryDescription}}</td>
                              			<td>{{$category->publicationStatus==1?'Published':'Unpublished'}}</td>
                              			<td>
                              				<a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">
                              					<span class="fas fa-edit"> Edit</span>
                              				</a>

                              				<a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure to delete this');">
                              					<span class="fas fa-trash"> Delete</span>
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
                    <br><br><br><br><br><br><br>
                  </div>
                </div>
            </div>


@endsection
