@extends('layouts.basic')

@section('content')
	
	@if(Session('customer'))

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			@include('public.pages.inc.cartTemplate')

		</div>
	</section>

	@else

		<h2>You must login to proceed to checkout.</h2>
		<hr>
		@include('public.pages.inc.loginTemplate')

	@endif

@endsection