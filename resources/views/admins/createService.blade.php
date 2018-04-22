@extends('admins.adminMaster')

@section('title')
	User History
@endsection


@section('content')

<div class="row">
<div class="col-md-10">
	<h2 class="text-center text-success">{{Session::get('message')}}</h2>
  <form action="/createService" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label  class="col-sm-2 control-label">Sevice Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="serviceName">
        <span class="text-danger"></span>
      </div>
    </div>

    <div class="form-group">
      <label  class="col-sm-2 control-label">Service Price</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="servicePrice">
        <span class="text-danger"></span>
      </div>
    </div>


    <div class="form-group">
      <label for="inputPassword3" class=" col-sm-2 control-label">Service  Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="serviceDescription" rows="8"></textarea>
        <span class="text-danger"></span>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btn" class="btn btn-success btn-block"> Save Service</button>
      </div>
    </div>
  </form>
  </div>
</div>
@endsection
