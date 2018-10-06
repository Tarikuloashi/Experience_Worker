@extends('user.master')

@section('mainContent')
<br>
  <div class="row">
      <div class="col-md-8 m-auto">
          <div class="card">
              <form  action="/postRequestService" method="POST" class="shadow-lg">
                {{csrf_field()}}
                <div class="card-header text-center"><h3 >Request Service</h3></div>
                  <div class="card-body">

                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Problem Title</label>
                          <div class="col-sm-9">
                              <input type="text" name="title" class="form-control"  placeholder="Give a title of your problem" required>
                          </div>
                      </div>

                            <input type="hidden" class="form-control input-sm" value="{{$serviceById->id}}" name="service">



                            <input type="hidden" class="form-control input-sm" value="{{$serviceById->categoryid}}" name="category">



                      <div class="form-group row">
                          <label class="col-sm-3 text-right control-label col-form-label">Problem Description</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" rows="6" name="description" placeholder="Please describe your problem."></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">

                      <div class="col-sm-12 text-center">
                          <input type="submit" value="Submit" class=" btn btn-success btn-lg pl-5 pr-5">
                      </div>
                  </div>
              </form>
          </div>

      </div>

  </div>
<br><br><br><br><br>


@endsection
