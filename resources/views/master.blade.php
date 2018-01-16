<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('views/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('views/H_S_/H_S.css')}}">

  </head>

  <body>
    
    @include('layouts.header')
    @yield('content')

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{('asset(bootstrap/js/jquery-3.2.1.min.js')}}"></script>
    
    <script src="{{('asset(bootstrap/js/bootstrap.min.js')}}"></script>
    
    

  </body>
</html>
