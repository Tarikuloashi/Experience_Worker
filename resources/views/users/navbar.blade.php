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
