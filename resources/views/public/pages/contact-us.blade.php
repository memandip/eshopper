@extends('layouts.basic')

@section('content')

<div id="contact-page" class="container">
<div class="bg">
	<div class="row">
		<div class="col-sm-8">
			<div class="contact-form">
				<h2 class="title text-center">Get In Touch</h2>
				@if(Session::has('success'))
				<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  {{Session('success')}}
				</div>
				@endif

				@foreach($errors->all() as $error)
					<p class="error">{{$error}}</p>
				@endforeach
				
				<div class="status alert alert-success" style="display: none"></div>
		    	<form id="main-contact-form" action="{{url('contact-us')}}" class="contact-form row" name="contact-form" method="post">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
		            <div class="form-group col-md-6">
		                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
		            </div>
		            <div class="form-group col-md-6">
		                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
		            </div>
								<div class="form-group col-md-12">
		                <input type="number" name="phone" class="form-control" placeholder="Phone number">
		            </div>
		            <div class="form-group col-md-12">
		                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
		            </div>
		            <div class="form-group col-md-12">
		                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
		            </div>
		            <div class="form-group col-md-12">
		                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
		            </div>
		        </form>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="contact-info">
				<h2 class="title text-center">Contact Info</h2>
				<address>
					<p>E-Shopper Nepal</p>
					<p>Freak Street, Thamel, 44600</p>
					<p>kathmandu, Nepal</p>
					<p>Mobile: +977 9848256830</p>
					<p>Fax: 1-714-252-0026</p>
					<p>Email: info@e-shoppernepal.com</p>
				</address>
				<div class="social-networks">
					<h2 class="title text-center">Social Networking</h2>
					<ul>
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div><!--/#contact-page-->

<footer id="footer"><!--Footer-->
</footer>

	</div>
</div>

@endsection
