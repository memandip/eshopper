@extends('layouts.master')

@section('slider')

@section('styles')
<link href="{{url('css/ken-burns.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="{{url('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
<link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
<style type="text/css">
	#slider{
	  margin-bottom: 30px;
	}
</style>
<script src="{{url('js/owl.carousel.js')}}"></script>
@endsection

<section id="slider"><!--slider-->
	
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
	        <div class="carousel-inner" role="listbox">  
	            <div class="item active"><!-- First-Slide -->
	                <img src="images/products/1477649902samragee8.jpg" alt="" class="img-responsive" />
	                <div class="carousel-caption kb_caption kb_caption_right">
	                    <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
	                    <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
	                </div>
	            </div>  
	            <div class="item"> <!-- Second-Slide -->
	                <img src="images/products/1479570317Selena Gomez.jpg" alt="" class="img-responsive" />
	                <div class="carousel-caption kb_caption kb_caption_right">
	                    <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
	                    <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
	                </div>
	            </div> 
	            <div class="item"><!-- Third-Slide -->
	                <img src="images/products/1480501526Japanese.jpg" alt="" class="img-responsive"/>
	                <div class="carousel-caption kb_caption kb_caption_center">
	                    <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
	                    <h4 data-animation="animated flipInX">cupidatat non proident</h4>
	                </div>
	            </div> 
	        </div> 
	        <!-- Left-Button -->
	        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a> 
	        <!-- Right-Button -->
	        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
	            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a> 
	    </div>
		<script src="js/custom.js"></script>
	</div>
	<!-- //banner -->
</section><!--/slider-->
@endsection


@section('content')

<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
		@foreach($products as $product)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<a class="example-image" href="{{url('images/products')}}/{{$product->image}}" data-lightbox="example-set">
					      		<img class="example-image" src="{{url('images/products')}}/{{$product->image}}	" alt="product-image" height="268" width="249" />
					      	</a>
							<h2>Rs. {{$product->price}}</h2>
							<p>{{$product->product_name}}</p>
							<a ng-click="addToCart({{$product->id}},'{{$product->product_name}}',1,{{$product->price}})" class="btn btn-default add-to-cart">
								<i class="fa fa-shopping-cart"></i>Add to cart
							</a>
							<a href="{{url('product')}}/{{$product->id}}" class="btn btn-default add-to-cart" title="View Details">
							<i class="glyphicon glyphicon-eye-open"></i> View Details
							</a>
						</div>
				</div>
			</div>
		</div>
		@endforeach
	</div><!--features_items-->
</div>

<div>
	<div class="category-tab col-md-12"><!--category-tab-->
		<h2 class="title text-center">Category tab items</h2>
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<?php $sn = 1; $ctab = 0;?>
				@foreach($ctabs as $c)
					@if($c->hasChild($c->id))
						<li class="@if($sn==1){{'active'}}@endif"><a href="#{{$c->id}}" data-toggle="tab">{{$c->category_name}}</a></li>
						<?php $sn++; $ctab++; ?>
					@endif
					<?php if($ctab==6){break;} ?>
				@endforeach
			</ul>
		</div>
		<div class="tab-content">
			<?php $sn = 1; $count = 0; ?>
			@foreach($ctabs as $c)
				@if($c->hasChild($c->id))
					<?php $p = 0; ?>
					<div class="tab-pane fade @if($sn==1){{'active in'}}@endif" id="{{$c->id}}" >
						@foreach($c->getAllChildren($c->id) as $child)
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{url('images/products')}}/{{$child->image}}" class="tab-image" alt="" />
										<h2>{{'Rs. '.$child->price}}</h2>
										<p>{{$child->product_name}}</p>
										<a ng-click="addToCart({{$child->id}},'{{$child->product_name}}',1,{{$product->price}})" class="btn btn-default add-to-cart">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
										<a href="{{url('product').'/'.$child->id}}" class="btn btn-default add-to-cart">
											<i class="glyphicon glyphicon-eye-open"></i> view details
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php  $p++; if($p==4){break;}?>
						@endforeach
					</div>
					<?php $sn++; $count++; ?>
				@endif
				<?php if($count==6){break;} ?>
			@endforeach
		</div><!--/category-tab-->
	</div>
</div>	

@endsection

@section('scripts')
	<script src="{{url('js/lightbox.min.js')}}"></script>
@endsection