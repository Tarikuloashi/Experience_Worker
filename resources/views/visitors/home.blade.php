<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Service Provider </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('visitors/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('visitors/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('visitors/')}}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('visitors/')}}/css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><i class="fas fa-map-marker-alt "></i> Online Service Provider </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Online Service Provider</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Register For More service.Request any service request.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Find Out More</a>
          </div>
        </div>
      </div>
    </header>



    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Look Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          @foreach($services as $service)
          <div class="col-lg-3 col-md-6 text-center">

            <div class="card mt-5" height="400px">
              <img class="card-img-top" src="{{asset($service->serviceImage)}}" alt="Card image cap" height="200px">
              <div class="card-body">
                <h6 class="card-title">{{$service->serviceName}}</h6>
              </div>
              <div class="card-body">
                <a href="#" style="background-color:#f05f40;color:#ffffff" class="btn shadow-lg" data-toggle="modal" data-target="#serviceModal{{$service->id}}">Details</a>
              </div>
            </div>

          </div>
          @endforeach

        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>01751693464</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="">tarikul653@diu.edu.bd</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- service Modal -->
    @foreach ($services as $service)
        <div class="modal fade" id="serviceModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
              <div class="modal-header ">
                <h2 class="modal-title mx-auto text-info">Service  Information</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{asset($service->serviceImage)}}" width="100%" height="300px">
                    </div>
                    <div class="col-md-6 ">
                        <h5 class="m-2"><span class="text-info">Category Name:</span> {{$service->categoryName}} </h5>

                        <h5 class="m-2"><span class="text-info">Service Name:</span> {{$service->serviceName}} </h5>

                        <h5 class="m-2 text-info">Service Details:</h5>
                        <p class="m-2">{{$service->serviceDescription}}</p>

                        <h5 class="m-2 text-info">Pricing: </h5>
                        <h6 class="m-2" style="color:red"> Visiting Charge: {{$service->minPrice}} Taka.</h6>
                    </div>
                  </div>
             </div>
              <div class="modal-footer float-left">
                <span class="float-left" style="color:red"><font size="3">***If you want to request service please  </font></span>
                <a href="{{url('/login')}}" class="btn btn-info shadow-lg">Login</a>
                <button type="button" class="btn btn-danger shadow-lg" data-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>
    @endforeach
    <!-- service Modal -->


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('visitors/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('visitors/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('visitors/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('visitors/')}}/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="{{asset('visitors/')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('visitors/')}}/js/creative.min.js"></script>

  </body>

</html>
