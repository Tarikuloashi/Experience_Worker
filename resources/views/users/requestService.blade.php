@extends('users.userMaster')

@section('title')
  Request Service
@endsection



@section('content')
<div class="container ">
      <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-dark">
              <div class="panel-heading bg-primary">
                  <div class="panel-title">Sign Up</div>
              </div>
              <div class="panel-body bg-info">

        <form action="/postRequestService" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="text" name="title" class="form-control"  required>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <select class="form-control" name="category">
                <option>Select Category Name</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->categoryName}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <select class="form-control" name="service">
                <option>Select Service Name</option>
                @foreach($services as $category)
                <option value="{{$category->id}}">{{$category->serviceName}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <textarea rows="6" name="description"></textarea>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success pull-right">
          </div>
        </form>
      </div>
          </div>
       </div>
  </div>


@endsection
