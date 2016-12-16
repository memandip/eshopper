@extends('admin.admin')

@section('page_title')
  | edit permission
@endsection

@section('page-header')
  Edit Permission
@endsection

@section('pagename')
  / edit permission
@endsection

@section('content')

	<div class="col-md-12">
		
		<h1>Add permission</h1>
		<hr>
		@include('inc/messages')
		{{Form::open()}}
			<label for="name">Permission name: </label>
			<input type="text" name="name" id="name" placeholder="Permission name" class="form-control" value="{{old('name') ? old('name') : $permission->name}}">
			<label for="description">Description: </label>
			<textarea type="text" name="description" id="description" placeholder="Permission description" class="form-control" rows="10">{{old('description') ? old('description') : $permission->description}}</textarea>
			<br>
			<input type="submit" name="btnSubmit" value="Add permission" class="btn btn-primary">
		{{Form::close()}}
	</div>

@endsection