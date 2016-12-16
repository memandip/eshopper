@extends('admin.admin')

@section('pagename') / add usergroup @endsection

@section('content')

<div class="col-md-12">
    <h1>Add User Group Form <sup style="font-size:12px;">* all fields with are mandatory.</sup></h1>

    @include('inc/messages')

    {{Form::open()}}

    	<div class="col-md-8">
    		<label for="group_name">User Group Name:</label>
	    	<input type="text" name="group_name" id="group_name" placeholder="User Group Name" class="form-control" value="{{old('group_name')}}">
	    	<label for="group_description">User Group Description:</label>
	    	<textarea id="group_description" name="group_description" placeholder="User Group Description" rows="10" class="form-control">{{old('group_description')}}</textarea>
	    	<br>
	    	<input type="submit" name="btnSubmit" value="Add User Group" class="btn btn-success">
    	</div>

    {{Form::close()}}

</div>

@endsection