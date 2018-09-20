<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>OSP</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="a2z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="{{asset('frontEnd/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--clients slider  -->
	<link href="{{asset('frontEnd/')}}/css/owl.carousel.css" rel="stylesheet">
	<!-- //clients slider  -->
	<!--banner slider  -->
	<link href="{{asset('frontEnd/')}}/css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link href="{{asset('frontEnd/')}}/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('frontEnd/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<div class="w3layouts-header">
		<div class="container">

			@include('frontEnd.include.header')
			<div class="clearfix"> </div>
			@include('frontEnd.include.menu')
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- //header -->
	<!-- banner -->
		@yield('mainContent')
	<!--  //about bottom -->
	<!-- footer -->
		@include('frontEnd.include.footer')
	<!--//footer  -->


	<!-- js -->
	<script src="{{asset('frontEnd/')}}/js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="{{asset('frontEnd/')}}/js/JiSlider.js"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!--search-bar-->
	<script src="{{asset('frontEnd/')}}/js/main.js"></script>
	<!--//search-bar-->
	<!-- clients slider-->
	<script src="{{asset('frontEnd/')}}/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay:true,
				navigation: true,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //clients slider-->
	<!-- start-smooth-scrolling -->
	<script  src="{{asset('frontEnd/')}}/js/move-top.js"></script>
	<script  src="{{asset('frontEnd/')}}/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script  src="{{asset('frontEnd/')}}/js/SmoothScroll.min.js"></script>
	<!-- Numscroller -->
	<script src="{{asset('frontEnd/')}}/js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('frontEnd/')}}/js/bootstrap.js"></script>


</body>

</html>
