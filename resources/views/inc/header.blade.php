<header>
		<div class="header-middle"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img src="{{url('images/home/logo.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if(Session('customer'))
								<li><a href="{{url('account')}}"><i class="fa fa-user"></i> Account</a></li>
								@endif
								<li><a href="{{url('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">@{{cartCount}}</span></a></li>
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
		</div><!--/header-top-->

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