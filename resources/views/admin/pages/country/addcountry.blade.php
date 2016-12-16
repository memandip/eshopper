@extends('admin.admin')

@section('page_title')
  | add country
@endsection

@section('page-header')
  Add Country
@endsection

@section('pagename')
  / add country
@endsection

@section('content')

<div class="col-md-12">
	@include('inc/messages')
	{{Form::open()}}
		<label for="name">Country name:</label>
		<input type="text" id="name" name="name" placeholder="Country name" class="form-control" value="{{old('name')}}">
		<label for="iso2">Iso 2:</label>
		<input type="text" id="iso2" name="iso_2" placeholder="Iso 2" class="form-control" value="{{old('iso_2')}}">
		<label for="iso3">Iso 3:</label>
		<input type="text" id="iso3" name="iso_3" placeholder="Iso 3" class="form-control" value="{{old('iso_3')}}">
		<label for="dialing_code">Dialing code:</label>
		<input type="text" id="dialing_code" name="dialing_code" placeholder="Dialing_code" class="form-control" value="{{old('dialing_code')}}">
		<label for="nationality">Nationality:</label>
		<input type="text" id="nationality" name="nationality" placeholder="Nationality" class="form-control" value="{{old('nationality')}}">
		<label for="status">Status:</label>
		<select name="status" id="status">
			<option value="1" {{old('status') == 1 ? 'selected':''}}>Active</option>
			<option value="0" {{old('status') == 0 ? 'selected':''}}>Not-active</option>
		</select>
		<br><br>
		<input type="submit" name="btnSubmit" value="Add country" class="btn btn-primary">
	{{Form::close()}}
</div>

@endsection