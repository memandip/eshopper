<div class="col-md-12">
	
	<h1>Your profile</h1>
	<table class="table table-striped table-hover">

		<tr>
			<td>Full name</td>
			<td>{{$customer->full_name}}</td>
		</tr>

		<tr>
			<td>Email</td>
			<td>{{$customer->email}}</td>
		</tr>

		<tr>
			<td>Username</td>
			<td>{{$customer->username}}</td>
		</tr>

		<tr>
			<td>Country</td>
			<td>{{$customer->country->name}}</td>
		</tr>

		<tr>
			<td>Address</td>
			<td>{{$customer->address}}</td>
		</tr>
		
	</table>

</div>