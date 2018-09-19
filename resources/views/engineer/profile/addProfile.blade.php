@extends('engineer.master')

@section('mainContent')
<div class="row">
  <div class="col-md-8 mx-auto">
      <div class="card">
          <form class="" action="/profile/save" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
              <div class="card-body mx-auto">
                  <h2 class="card-title text-center">Add Engineer Profile</h2>

                  <div class="form-group row">
                      <label class="col-sm-3 text-right control-label col-form-label">Engineer Short Description</label>
                      <div class="col-sm-9" id="editor" >
                        <textarea class="form-control" name="description" rows="8"></textarea>
                      </div>
                  </div>



                  <div class="form-group row">
                      <label class="col-sm-3 text-right control-label col-form-label">Add Skills</label>
                      <div class="col-sm-9" id="editor" >
                        <textarea class="form-control" name="skills" rows="8"></textarea>
                      </div>
                  </div>


              </div>
              <div class="border-top">
                  <div class="card-body">
                      <button type="submit" class="btn btn-primary btn-block">Create Profile</button>
                  </div>
              </div>
          </form>
      </div>

  </div>
</div>

@endsection
