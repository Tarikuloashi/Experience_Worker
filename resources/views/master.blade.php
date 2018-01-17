<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('views/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('views/H_S/H_S.css')}}">

  </head>

  <body>
    
    @include('layouts.header')
    <div id="content" class="bg-success">
    <br><br><br><br>
     @yield('content')
    </div>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{asset('views/bootstrap/js/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{asset('views/bootstrap/js/bootstrap.min.js')}}"></script>
    
    

  </body>
</html>
