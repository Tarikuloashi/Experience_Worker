<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('views/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('views/H_S/headerSidebar.css')}}">
    <title>
        @yield('title')
    </title>
  </head>

  <body>
    
    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <br><br><br>
                    <h3 class="glyphicon glyphicon-home" ><a  href="{{url('/userHome')}}"> Experience Worker</a></h3>
                    <strong>EW</strong>
                </div>

                           

                <ul class="list-unstyled components">
                    <li>
                        <a href="{{url('/userProfile')}}">
                            <i class="glyphicon glyphicon-user"></i>
                             Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/userPost')}}">
                            <i class="glyphicon glyphicon-share"></i>
                            Post Problem
                        </a>
                    </li> 
                    <li>
                        <a href="{{url('/userHistory')}}">
                            <i class="glyphicon glyphicon-tasks"></i>
                            Work History
                        </a>
                    </li> 
                    
                </ul>
            </nav>

             <!-- Page Content Holder  -->
            <div id="content" class="bg-primary">
                <nav class="navbar  navbar-fixed-top">
                    <div class="container-fluid ">
                        <div class="navbar-header fixed">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <br>
                <br>
                <br>
                @yield('content')
            </div>
    </div>
            
        


         
   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script type="text/javascript" src="{{asset('views/bootstrap/js/jquery-3.2.1.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('views/bootstrap/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" >
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
      
     </script>
    

  </body>
</html>
