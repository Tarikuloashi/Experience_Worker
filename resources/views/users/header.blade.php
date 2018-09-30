public function showService($id){
  $requestServiceById=DB::table('request_services')

                ->join('service_locations','service_locations.serviceId','=','request_services.id')
                ->join('categories','request_services.categoryId','=','categories.id')
                ->join('services','request_services.serviceId','=','services.id')
                ->join('users','request_services.userId','=','users.id')
                ->select('request_services.*','categories.*','services.*','users.*','service_locations.*')
                ->where('service_locations.publicationStatus', 1)
                ->where('request_services.id', $id)
                ->first();
dd($requestServiceById);

             $engineer=serviceApponment::where('engineerid',Sentinel::getUser()->id)
                ->first();
                if(!empty($engineer)){
                  return view('engineer.requestView.viewSingleRequest',compact('requestServiceById','engineer'));
                }
                else{
                  $engineer=null;
                  return view('engineer.requestView.viewSingleRequest',compact('requestServiceById','engineer'));

                }

                // dd($requestServiceById);

}



<!-- <nav class="navbar  navbar-fixed-top">
      <div class="container-fluid ">
         <div class="navbar-header fixed">
             <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                 <i class="glyphicon glyphicon-align-left">H</i>
                 <span></span>
             </button>
         </div>

         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-right">
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="position:relative; padding-left:50px;">
                   <img src="/uploads/avatars/{{$user->avatar}}" style="width:32px; height:32px; positionn:absolute; top:10px; left:10px; border-radius:50%;">
                   {{ $user->user_name }}
                 </a> -->

                 <ul class="dropdown-menu" role="menu">
                   <li><a href="{{ url('/userProfile')}}">Profile</a></li>
                   <li>
                         <a href="{{ url('/logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                         </a>

                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
               <!-- </li>
             </ul>
         </div>
     </div>
 </nav>
   -->
