@extends('admin.admin')

@section('page_title')  | profile @endsection

@section('page_title') | Profile @endsection

@section('pagename')  / profile @endsection

@section('content')

<div class="col-md-12">
	<div class="col-md-6">
		<table class="table table-striped table-condensed">
			<tr>
				<td>Full name</td>
				<td>{{$user->first_name.' '.$user->last_name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{{$user->username}}</td>
			</tr>

			<tr>
				<td>Group</td>
				<td>{{$user->group->group_name}}</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>{{$user->country->name}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{$user->address1.' | '.$user->address2}}</td>
			</tr>
			<tr>
				<td>Company name</td>
				<td>{{$user->company_name}}</td>
			</tr>
			<tr>
				<td>Phone number</td>
				<td>{{$user->phone_number}}</td>
			</tr>
			<tr>
				<td>Mobile number</td>
				<td>{{$user->mobile_number}}</td>
			</tr>
		</table>
		<br>
		<a href="{{url('es/admin/setting')}}">
			<button class="btn btn-info">Update your profile</button>
		</a>
	</div>
</div>

@endsection