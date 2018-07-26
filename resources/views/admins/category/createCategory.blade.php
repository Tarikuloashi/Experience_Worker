@extends('admins.adminMaster')

@section('title')
	User History
@endsection

@section('content')

<hr/>
<form class="" action="{{route('category.store')}}" method="post">
{{csrf_field()}}

<div class="row">
<div class="col-lg-12">
  <h2 class="text-center text-success">{{Session::get('message')}}</h2>
  <hr/>
  <div class="well">
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="categoryName">
        <span class="text-danger">{{$errors->has('categoryName')?$errors->first('categoryName'):''}}</span>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="categoryDescription" rows="8"></textarea>
        <span class="text-danger">{{$errors->has('categoryName')?$errors->first('categoryName'):''}}</span>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
      <div class="col-sm-10">
        <select class="form-control" name="publicationStatus">
          <option>Select Publication Statues</option>
          <option value="1">Published</option>
          <option value="0">Unpublished</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success btn-block"> Save Category</button>
      </div>
    </div>
      </div>
</div>
</form>
@endsection
