<section><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					@if(Session('error'))
						<p class="error">{{Session('error')}}</p>
					@endif
					{{Form::open(['url'=>'login'])}}
						<input type="email" name="email" placeholder="Email Address" value="<?=old('email');?>" required/>
						<input type="password" name="password" placeholder="Password" required"/>
						<span>
							<input type="checkbox" class="checkbox" name="remember_me">
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					{{Form::close()}}

					<a href="{{url('redirect')}}" class="btn btn-info">FB Login</a>

				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					@include('inc/messages')
					{{Form::open(['url'=>'signup', 'ng-submit'=>'addCustomer()'])}}
						<input type="text" name="full_name" placeholder="Full name" class="form-control" value="{{old('full_name')}}">
				        <input type="text" name="username" placeholder="Username" class="form-control" value="{{old('username')}}">
				        <input type="text" name="email" placeholder="Email" class="form-control" value="{{old('email')}}">
				        <input type="password" name="password" placeholder="Password" class="form-control" value="{{old('username')}}">
				        <select class="form-control" name="country">
				          <option value="">select your country</option>
				          @foreach($countries as $country)
				          <option value="{{$country->id}}" <?php if(old('country')==$country->id){echo 'selected';} ?>>{{$country->name}}</option>
				          @endforeach
				        </select>
				        <input type="text" name="address" placeholder="Address" class="form-control" value="{{old('address')}}">
				        <br/>
						<button type="submit" class="btn btn-default">Signup</button>
					{{Form::close()}}
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->