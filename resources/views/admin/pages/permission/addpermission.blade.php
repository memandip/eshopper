@extends('admin.admin')

@section('page_title')
  | add permission
@endsection

@section('page-header')
  Add Permission
@endsection

@section('pagename')
  / add permission
@endsection

@section('content')

	<div class="col-md-12">
		
		<h1>Add permission</h1>
		<hr>
		@include('inc/messages')
		{{Form::open()}}
			<label for="name">Permission name: </label>
			<input type="text" name="name" id="name" placeholder="Permission name" class="form-control" value="{{old('name')}}">
			<label for="description">Description: </label>
			<textarea type="text" name="description" id="description" placeholder="Permission description" class="form-control" rows="10">{{old('description')}}</textarea>
			<br>
			<input type="submit" name="btnSubmit" value="Add permission" class="btn btn-primary">
		{{Form::close()}}
	</div>

@endsection