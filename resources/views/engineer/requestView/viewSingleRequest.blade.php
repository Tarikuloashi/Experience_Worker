@extends('engineer.master')

@section('mainContent')




  <h1>{{$requestServiceById->user_name}}</h1>
  <h1>{{$requestServiceById->email}}</h1>
  <h1>{{$requestServiceById->title}}</h1>
  <h1>{{$requestServiceById->serviceName}}</h1>
  <h1>{{$requestServiceById->serviceDescription}}</h1>
  <h1>{{$requestServiceById->minPrice}}</h1>
  <h1>{{$requestServiceById->maxPrice}}</h1>
  <h1>{{$requestServiceById->categoryName}}</h1>
  <h1>{{$requestServiceById->categoryDescription}}</h1>
  @if($engineer!=null)
  @if($engineer->jobstatus=='yes')
  @else
  <h1>You all ready assign anothor work</h1>
  @endif
  @else
  <a href="{{url('Appointment/service/'.$requestServiceById->serviceId)}}"class="btn btn-success">Accept1 Request</a>

  @endif




@endsection
