@extends('frontEnd.master')

@section('mainContent')


<br>
<br>
<br>
<div class="w3ls-section">
  <div class="container">
    <div class="register-top">
      <div class="col-md-5 col-sm-5 register-left">
        <img src="{{asset('frontEnd/')}}/images/order.jpg" alt="" class="img-responsive" />
      </div>
      <div class="col-md-7 col-sm-7 register-right">

        <form action="/login" method="POST" class="banner_form ">
          {{csrf_field()}}
          <!-- ********************************* Message -->
          @if(session('error'))
            <div class="alert alert-danger bg-success" >
              {{session('error')}}
            </div>
          @endif

          @if(session('success'))
            <div class="alert alert-success bg-success" >
              {{session('success')}}
            </div>
          @endif
          <!-- ********************************* Message -->
          <h6>Login In Form </h6>
          <div class="sec-right">
            <label class="contact-form-text">Email</label>
            <input type="email" name="email" class="form-control"  placeholder="example@example.com" required>
          </div>
          <div class="sec-left">
            <label class="contact-form-text">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <input type="submit" value="Sign In">


        </form>
        <a href="{{url('/register')}}" class="scroll">new user register here</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<br>
<br>
<br>
@endsection
