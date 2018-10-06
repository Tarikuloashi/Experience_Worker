@extends('admin.master')

@section('mainContent')

  <div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card shadow-lg">
            <form class="" action="/service/update" method="post" enctype="multipart/form-data" name="editProductForm">
              {{csrf_field()}}

                <div class="card-body mx-auto">
                    <h2 class="card-title text-center">Service Info</h2>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sevice Name</label>
                        <div class="col-sm-9">
                          <input type="text" value="{{$serviceById->serviceName}}" class="form-control" name="serviceName">
                          <input type="hidden" value="{{$serviceById->id}}" class="form-control" name="id">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="categoryid" required>
                						<option>Select Category Name</option>
                						@foreach($categories as $category)
                						<option value="{{$category->id}}">{{$category->categoryName}}</option>
                						@endforeach
                					</select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sevice Min Price</label>
                        <div class="col-sm-9">
                          <input type="number" value="{{$serviceById->minPrice}}" class="form-control" name="minPrice" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Sevice Max Price</label>
                        <div class="col-sm-9">
                          <input type="number" value="{{$serviceById->maxPrice}}" class="form-control" name="maxPrice" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Service Description</label>
                        <div class="col-sm-9" id="editor" >
                          <textarea class="form-control" name="serviceDescription" rows="8">
                            {{$serviceById->serviceDescription}}
                          </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Service Image</label>
                        <div class="col-sm-9">
                          <input type="file"  name="serviceImage" accept="image/*" >
                          <img name="serviceImage" src="{{asset($serviceById->serviceImage)}}" alt="" height="200" width="200">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">Update Service</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
  </div>

  <script>

		document.forms['editProductForm'].elements['categoryid'].value={{$serviceById->categoryid }}


	</script>

@endsection
