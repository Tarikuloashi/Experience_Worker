@extends('user.master')

@section('mainContent')
 <h1>Service Details</h1>
  <div class="row pb-5 pt-5 shadow-lg">

      <div class="col-md-6">
        <img class="card-img-top"  src="{{asset($serviceById->serviceImage)}}" alt="Card image cap" width="500px" height="400px">

      </div>
      <div class="col-md-6 ">
          <div id="accordian-4">
              <div class="card m-t-30">
              <!-- service Name -->
                  <a class="card-header " data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-1" aria-expanded="true" aria-controls="Toggle-1">

                      <h3><i class="mdi mdi-rename-box" aria-hidden="true"></i>  Service Name </h3>
                  </a>
                  <div id="Toggle-1" class="multi-collapse collapse show" style="">
                      <div class="card-body widget-content">
                          <h4>{{ $serviceById->serviceName }}</h4>
                      </div>
                  </div>
              <!-- service Name -->
              <!-- service Description  -->
                  <a class="card-header link border-top collapsed" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">

                      <h3><i class="mdi mdi-details" aria-hidden="true"></i>  Service Description</h3>
                  </a>
                  <div id="Toggle-2" class="multi-collapse collapse" style="">
                      <div class="card-body widget-content">
                          <h4>{{ $serviceById->serviceDescription }}</h4>
                      </div>
                  </div>
                  <!-- service Description  -->
                  <!-- Min Price -->
                  <a class="card-header link border-top collapsed" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-3" aria-expanded="false" aria-controls="Toggle-3">

                      <h3><i class="far fa-money-bill-alt" aria-hidden="true"></i> Minimum Price</h3>
                  </a>
                  <div id="Toggle-3" class="multi-collapse collapse" style="">
                      <div class="card-body widget-content">
                          <h4>{{ $serviceById->minPrice }} Taka</h4>
                      </div>
                  </div>
                  <!-- Min Price -->
                  <!-- Max Price -->
                  <a class="card-header link border-top collapsed" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-4" aria-expanded="false" aria-controls="Toggle-4">

                      <h3><i class="fas fa-money-bill-alt" aria-hidden="true"></i> Maximum Price</h3>
                  </a>
                  <div id="Toggle-4" class="multi-collapse collapse" style="">
                      <div class="card-body widget-content">
                          <h4>{{ $serviceById->maxPrice }} Taka</h4>
                      </div>
                  </div>
                  <!-- Max Price -->
              </div>
          </div>
      </div>

  </div>







@endsection
