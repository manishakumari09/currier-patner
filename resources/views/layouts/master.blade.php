<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="sws6j2VZXkdjbQUzFGIqti7aCYZluIg2pHxfmNYb">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Steadfast Courier" />
	<meta property="og:description" content="Always On Time" />
	<meta property="og:image" content="icon/website-share.png" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="315" />
	<meta name="google-site-verification" content="3rMKM2JKjbtv89s2M-xg_jMz-cXUVR9bepDj8Ip9Xuw" />
	<title>Steadfast Courier</title>

	<link rel="icon" href="icon/fav.png" type="image/gif">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/themes/smoothness/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/use.fontawesome.com/releases/v5.6.3/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/simplebar.min.css')}}" />
	<link rel="stylesheet" media="screen and (max-width:1200px)" href="{{asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/all8a7b.css?id=b3f2f74720775e520af7')}}">



	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-98358584-1', 'auto');
		ga('send', 'pageview');

	  </script>



</head>
<body>
	<div id="app">
		<div class="col-md-12 bg-white" >

        @include('layouts.partial.header')

        @yield('content')

         @include('layouts.partial.footer')

	</div>

	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
	  window.fbAsyncInit = function() {
		FB.init({
		  xfbml            : true,
		  version          : 'v4.0'
		});
	  };

	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = '../connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	  attribution=setup_tool
	  page_id="114049202349356"
		theme_color="#1dc68c">
	</div>


	<script src="{{asset('js/app7554.js?id=f9aa11829e116a70774c')}}"></script>
	<!-- script start -->

	<script src="{{asset('js/simplebar.js')}}"></script>

	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>

	<script src="{{asset('js/tippy.all.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/all2ce5.js?id=f9ba99a350c653c9c96e')}"></script>
	<!-- script end -->



</body>

</html>
