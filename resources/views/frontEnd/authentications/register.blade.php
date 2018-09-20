@extends('frontEnd.master')

@section('mainContent')



<!-- register -->

<div class="w3ls-section banner-single" id="register">
  <div class="container">
    <h4 class="main-title">get registered!</h4>
    <div class="about-inner-main">
      <div class="col-md-5 reg-img">
        <img src="{{asset('frontEnd/')}}/images/girl.png" alt="" class="img-responsive" />
      </div>
      <div class="col-md-7  w3layouts-reg-form">
        <form action="/register" method="POST" class="banner_form">
          {{csrf_field()}}

          <p>Please fill your details as mentioned below </p>
          <div class="sec-left">
            <label class="contact-form-text">Name</label>
            <input type="text" name="user_name" class="form-control" placeholder="User Name" required>

          </div>
          <div class="sec-right">
            <label class="contact-form-text">Email</label>
            <input type="email" name="email" class="form-control" placeholder="example@example.com" required>

          </div>
          <div class="sec-left">
            <label class="contact-form-text">Mobile no.</label>
            <input type="number" name="phone" class="form-control" placeholder="Mobile Number" required>
          </div>
          <div class="sec-right">
            <label class="contact-form-text">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="sec-left">
            <label class="contact-form-text">Repeat Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
          </div>

          <input type="submit" value="Register">
        </form>

      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- //register -->

@endsection
