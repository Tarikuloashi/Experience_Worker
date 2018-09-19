@extends('user.master')

@section('mainContent')

  <div class="row">
      <div class="col-md-8 m-auto">
          <div class="card">
              <form  action="/postRequestService" method="POST">
                {{csrf_field()}}
                  <div class="card-body">
                      <h4 class="card-title">Request Service</h4>
                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Service Request Title</label>
                          <div class="col-sm-9">
                              <input type="text" name="title" class="form-control"  placeholder="Service Request Title">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="category">
                              <option>Select Category Name</option>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->categoryName}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Service Name</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="service">
                              <option>Select Service Name</option>
                              @foreach($services as $category)
                              <option value="{{$category->id}}">{{$category->serviceName}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" rows="6" name="description"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-9">
                          <input type="submit" value="Submit" class="btn btn-success pull-right">
                      </div>
                  </div>
              </form>
          </div>

      </div>
  </div>



@endsection