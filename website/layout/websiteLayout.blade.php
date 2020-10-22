<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>{{$setting->title}}</title>
	<!-- Stylesheets -->
	<link href="{{asset('frontasset/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('frontasset/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="{{asset('frontasset/css/material-design-iconic-font.')}}" rel="stylesheet">
	<link href="{{asset('frontasset/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontasset/css/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontasset/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('frontasset/css/style.css')}}" rel="stylesheet">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="{{asset('frontasset/js/jquery-1.12.2.min.js')}}"></script>
</head>

<body>
	<div class="mobile-menu">
		<div class="menu-mobile">
			<div class="brand-area">
				<a href="#">
					<img src="{{asset('frontasset/images/logo.png')}}">
				</a>
			</div>
			<div class="mmenu">
				<ul>
					<li><a href="#" data-value="home">Home</a></li>
					<li><a href="#" data-value="faq">FAQ</a></li>
					<li><a href="#" data-value="faq">FAQ</a></li>
					<li><a href="#" data-value="faq">FAQ</a></li>
					<li><a href="#" data-value="contact">Contact</a></li>

				</ul>
				<ul class="clearfix">
					<li><a href="index_ar.html">Arabic</a></li>
				</ul>
			</div>
		</div>
		<div class="m-overlay"></div>
	</div>
	<!--mobile-menu-->
	<div class="main-wrapper">
		<div class="topHeader">
		  <div class="container">
			<div class="head_right clearfix">
				<ul class="social_links clearfix">
					<li>
						<a href="#" target="_blank"><i class="fa fa-envelope"></i> {{$setting->info_email }}</a>
					</li>
					<li>
						<a href="#" target="_blank"><i class="fa fa-phone"></i>{{$setting->phone }}</a>
					</li>
					<li>
						<a href="index_ar.html">AR</a>
					</li>
				</ul>
			</div>
		  </div>
		</div>
		<!--topHeader-->
		<header id="header">
			<div class="container">
				<div class="bottomHeader">
					<div class="logo-site">
						<a href="#"><img src="{{url('frontasset/images/logo.svg')}}" alt="" class="img-responsive"></a>
					</div>
					<ul class="main_menu clearfix">
						<li><a href="index">{{__('website.home')}}</a></li>
						<li><a href="subjects">{{__('website.Subjects')}}</a></li>
						<li><a href="teachers">{{__('website.Teachers')}}</a></li>
						<li><a href="questions">{{__('website.FAQ')}}</a></li>
						<li><a href="contact">{{__('website.contact')}}</a></li>
					</ul>
					<button type="button" class="hamburger is-closed">
						<span class="hamb-top"></span>
						<span class="hamb-middle"></span>
						<span class="hamb-bottom"></span>
					</button>
				</div>
			</div>
        </header>
        
              @yield('content')


        <footer id="footer">
            <div class="container">
                <p class="copyright">© 2018 e-omal .Powered by Emstell</p>
            </div>
        </footer>
        <!--footer-->
        </div>
        <!--main-wrapper-->
        <script src="{{asset('frontasset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontasset/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('frontasset/js/wow.js')}}"></script>
        <script src="{{asset('frontasset/js/script.js')}}"></script>
        <script>
        new WOW().init();
        </script>
        
        </body>
        
        </html>
        
        
        
        
        