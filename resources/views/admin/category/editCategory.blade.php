@extends('admin.master')

@section('mainContent')

  <div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <form class="" action="/category/update" method="post" name="editCategoryForm">
              {{csrf_field()}}

                <div class="card-body mx-auto">
                    <h2 class="card-title text-center">Category Info</h2>

                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                        <div class="col-sm-9">
                          <input type="text" value="{{$categoryByid->categoryName}}"  class="form-control" name="categoryName">
                          <input type="hidden" value="{{$categoryByid->id}}" class="form-control" name="id">
                          <span class="text-danger" > {{$errors->has('categoryName')?$errors->first('categoryName'):''}} </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                        <div class="col-sm-9" id="editor" >
                          <textarea  class="form-control" name="categoryDescription" rows="8">{{$categoryByid->categoryDescription}}</textarea>
                          <span class="text-danger">{{$errors->has('categoryName')?$errors->first('categoryName'):''}}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Publication Status</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="publicationStatus">
                            <option>Select Publication Statues</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">Save Category</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
  </div>
  <script>
  		document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryByid->publicationStatus}}

  	</script>

@endsection
