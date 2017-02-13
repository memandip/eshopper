<div class="col-sm-12">
	<div class="signup-form"><!--sign up form-->
		<h2>Setting Page</h2>
		<hr>
		@include('inc/messages')
		{{Form::open(['url'=>'customer/setting'])}}
			<input type="text" name="full_name" placeholder="Full name" class="form-control" value="{{old('full_name') ? old('full_name') : $customer->full_name}}">
	        <input type="text" name="username" placeholder="Username" class="form-control" value="{{old('username') ? old('username') : $customer->username}}">
	        <input type="text" name="email" placeholder="Email" class="form-control" value="{{old('email') ? old('email') : $customer->email}}">
	        <input type="password" name="password" placeholder="Password" class="form-control">
	        <select class="form-control" name="country">
	          <option value="">select your country</option>
	          @foreach($countries as $country)
	          <option value="{{$country->id}}" {{(old('country') ? old('country') : $customer->country_id) == $country->id ? 'selected':'not-selected'}}  <?php if(old('country')==$country->id){echo 'selected';} ?> >{{$country->name}}</option>
	          @endforeach
	        </select>
	        <input type="text" name="address" placeholder="Address" class="form-control" value="{{old('address') ? old('address') : $customer->address}}">
	        <br/>
			<button type="submit" class="btn btn-default">Save</button>
		{{Form::close()}}
	</div><!--/sign up form-->
</div>