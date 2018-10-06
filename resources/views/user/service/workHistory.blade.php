@extends('user.master')

@section('mainContent')
<style media="screen">
  .tb_font{
    font-size: 20px;
  }
</style>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-center text-primary">Work History</h2>
                <div class="table-responsive">
                  <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row"><div class="col-md-10 mx-auto">
                        <table class="table table-bordered table-hover">
                          <thead>
                              <tr class="text-center text-lg tb_font">
                    					<th class="font-weight-bold ">Job title</th>
                  						<th class="font-weight-bold">User Description</th>
                              <th class="font-weight-bold">Service Info </th>
                              <th class="font-weight-bold">Engineer Info</th></font>
                    					</tr>
                            </thead>
                            <tbody>

                              @foreach($workHistoryAccepted as $accepted)
                    						<tr>
                    								<td>{{$accepted->title}}</td>
                    								<td>{{$accepted->description}}</td>
                                    <td class="text-center"><a class="btn btn-success text-light " data-toggle="modal" data-target="#serviceModal{{$accepted->id}}"><i class="fas fa-clipboard-list"></a></td>
                                    <td><a class="" data-toggle="modal" data-target="#userinfo{{$accepted->id}}" href="#" onMouseOver="this.style.color='green'" onMouseOut="this.style.color='blue'">{{$accepted->user_name}}</a></td>

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
          </div>
        </div>

        @foreach ($workHistoryAccepted as $accepted)
            <div class="modal fade" id="serviceModal{{$accepted->id}}" tabindex="-1" role="dialog" >
              <div class="modal-dialog modal-lg" role="document" >
                <div class="modal-content">
                  <div class="modal-header ">
                    <h2 class="modal-title mx-auto">Service  Information</h2>

                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6 ">
                            <img src="{{asset($accepted->serviceImage)}}" width="100%" height="300px">
                        </div>
                        <div class="col-md-6 ">
                            <h4 class="m-2">Service Name: {{$accepted->serviceName}} </h4>
                            <hr>
                            <h4 class="m-2">Service Details:</h4>
                            <p class="m-2">{{$accepted->serviceDescription}}</p>
                            <hr>
                            <h4 class="m-2">Pricing: </h4>
                            <h5 class="m-2 " style="color:red"> Visiting Charge: {{$accepted->minPrice}} Taka.</h5>
                        </div>
                      </div>
                 </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        @endforeach

        @foreach ($workHistoryAccepted as $accepted)
            <div class="modal fade bd-example-modal-sm" id="userinfo{{$accepted->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document" >
                <div class="modal-content">
                  <div class="modal-header ">
                    <h4 class="modal-title mx-auto">User  Information</h4>

                  </div>
                  <div class="modal-body">
                    <div class=" text-center">


                    <img class="rounded-circle mb-2" width="200" src="/uploads/avatars/{{$accepted->avatar}}" >
                    <h3 class="text-primary">{{$accepted->user_name}}</h3>
                    </div>
                    <h4 class="bg-warning p-2 text-dark"><i class="mdi mdi-email lg"></i> {{$accepted->email}}</h4>
                    <h4 class="bg-warning p-2 text-dark"><i class="mdi mdi-cellphone lg"></i> {{$accepted->phone}}</h4>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
@endsection
