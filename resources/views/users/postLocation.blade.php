@extends('users.userMaster')

@section('title')
  Request Service
@endsection



@section('content')




<div class="col-sm-12">

<div class="col-sm-6">

  <h1>shsddh</h1>

</div>
<div class="col-sm-6">

    <h1>{{$data->title}}</h1>
    <h1>{{$data->description}}</h1>
    <h1>{{$data->categoryName}}</h1>
    <h1>{{$data->serviceName}}</h1>
</div>

</div>
<div class="form-group">
   <input type="hidden" class="form-control input-sm" value="{{$service->id}}" name="serviceId">
 </div>


@endsection
