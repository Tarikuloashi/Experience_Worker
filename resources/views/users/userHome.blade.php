@extends('users.userMaster')

@section('title')
	User Home
@endsection



@section('content')
<nav class="navbar  navbar-fixed-top">
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
								 </a>

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
							 </li>
						 </ul>
				 </div>
		 </div>
 </nav>



	<h2 class="text-danger">Home Page</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


@endsection
