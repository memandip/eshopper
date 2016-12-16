<!DOCTYPE html>
<html lang="en" ng-app="eshopper">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/styles.css')}}" rel="stylesheet">
  	<link href="{{url('css/responsive.css')}}" rel="stylesheet">
  	@yield('styles')
    <script src="{{url('js/angular.min.js')}}" charset="utf-8"></script>
    <script src="{{url('js/jquery.js')}}"></script>
  	<script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
      var app = angular.module('eshopper',[]);
      var baseUrl = '{{url('')}}/';
  	</script>
    <script src="{{url('js/scripts.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body ng-controller="eshopperController" ng-cloak>
	<header id="header"><!--header-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if(Session('customer'))
								<li><a href="{{url('account')}}"><i class="fa fa-user"></i> Account</a></li>
								@endif
								<li>
								<a href="{{url('checkout')}}" class="{{isset($checkoutActive) ? $checkoutActive : ''}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url('cart')}}" class="{{isset($cartActive) ? $cartActive : ''}}"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">@{{cartCount}}</span></a>
								</li>
								@if(!Session('customer'))
									<li>
										<a href="{{url('login')}}"><i class="fa fa-lock"></i> Login</a>
									</li>
                				@else
                					<li>
                						<a href="{{url('logout')}}"><i class="glyphicon glyphicon-off"></i> logout</a>
                					</li>
                				@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="{{url('index')}}" class="{{isset($homeActive) ? $homeActive : ''}}">Home</a></li>
                <li><a href="{{url('products')}}" class="{{isset($productActive) ? $productActive : ''}}">Products</a></li>
                <li><a href="{{url('cart')}}" class="{{isset($cartActive) ? $cartActive : ''}}">Cart</a></li>
                <li><a href="{{url('checkout')}}" class="{{isset($checkoutActive) ? $checkoutActive : ''}}">Checkout</a></li>
                <li><a href="{{url('contact-us')}}" class="{{isset($contactActive) ? $contactActive : ''}}">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<div class="container">
		@yield('content')
	</div>

	<footer id="footer" style="margin-top:50px;"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->

	<script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    @yield('scripts')
</body>
</html>
