@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
@endsection

@section('content')
@if($product)
<div class="col-sm-9 padding-right">
	<div class="product-details"><!--product-details-->

		<div class="col-sm-5 col-md-5">
			<div class="view-product">
				<a class="example-image" href="{{url('images/products')}}/{{$product->image}}" data-lightbox="example-set">
		      		<img src="{{url('images/products')}}/{{$product->image}}" alt="product-image" />
		      	</a>
			</div>
		</div>

		<div class="col-md-7 col-md-7">
			<div class="product-information">
				<h2>{{$product->product_name}}</h2>
				<hr>
				<p>{{$product->long_desc}}</p>
				<span>
					<span>{{'Rs. '.$product->price}}</span>
					<button type="button" class="btn btn-fefault cart" ng-click="addToCart({{$product->id}},'{{$product->product_name}}', 1, {{$product->price}})">
						<i class="fa fa-shopping-cart"></i>
						Add to cart
					</button>
				</span>
				<p><b>Availability:</b> {{$product->status == 1 ? 'Available':'Not-available'}}</p>
				<p><b>Brand:</b> {{$product->getBrand($product->brand_id)->brand_name}}</p>
				<p><b>Category:</b> {{$product->getCategory($product->category_id)->category_name}}</p>
			</div>
		</div>

	</div><!--/product-details-->

</div>

@else

<div class="container text-center">
	<div class="content-404">
		<img src="{{url('images/404/404.png')}}" class="img-responsive" alt="" style="height:300px;"/>
		<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
		<h2><a href="" onclick="window.history.back()">Bring me back</a></h2>
	</div>
</div>

@endif

@endsection

@section('scripts')
	<script src="{{url('js/lightbox.min.js')}}"></script>
@endsection