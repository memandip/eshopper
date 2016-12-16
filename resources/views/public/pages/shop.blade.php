@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
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
		<div class="clearfix"></div>
		<ul class="pagination">
			{{$products->links()}}
		</ul>
	</div><!--features_items-->
</div>

@endsection

@section('scripts')
	<script src="{{url('js/lightbox.min.js')}}"></script>
@endsection
