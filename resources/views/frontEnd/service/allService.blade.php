@extends('frontEnd.master')

@section('mainContent')
<style media="screen">
  .mar{
    margin-bottom:10px;
  }
</style>
<div class="">
  <div class="container">
    <div class="banner-bottom-main">
      <div class="col-md-12 ">
        @foreach($services as $service)
        <div class="col-md-4 mar">
          <div class="banner-subg1">
            <h3>{{$service->serviceName}}</h3>

            <span class="fa fa-cog" aria-hidden="true"></span>
            <div class="read-btn">
              <a href="about.html">view more</a>
            </div>
          </div>


        </div>
          @endforeach
        <!-- <div class="col-md-4">
          <div class="banner-subg1">
            <h3>repair</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.</p>
            <span class="fa fa-yelp" aria-hidden="true"></span>
            <div class="read-btn">
              <a href="about.html">view more</a>
            </div>
          </div>
          <div class="banner-subg1">
            <h3>improvement</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.</p>
            <span class="fa fa-gg" aria-hidden="true"></span>
            <div class="read-btn">
              <a href="about.html">view more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="banner-subg1">
            <h3>repair</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.</p>
            <span class="fa fa-yelp" aria-hidden="true"></span>
            <div class="read-btn">
              <a href="about.html">view more</a>
            </div>
          </div>
          <div class="banner-subg1">
            <h3>improvement</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.</p>
            <span class="fa fa-gg" aria-hidden="true"></span>
            <div class="read-btn">
              <a href="about.html">view more</a>
            </div>
          </div>
        </div> -->

      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>




@endsection
