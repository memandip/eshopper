@extends('admin.admin')

@section('page_title') | Add Brand @endsection

@section('page-header') Add Brand @endsection

@section('content')

  <div class="col-md-12">
    <h1>Add Brand Form <sup style="font-size:12px;">*fields with asterisk are mandatory.</sup></h1>

    @include('inc/messages')

    {{Form::open()}}
      <div class="form-group">
        <label for="brandName">Brand Name:</label>
        <input type="text" name="brand_name" value="{{old('brand_name') ? old('brand_name') : $brand->brand_name}}" id="brandName" placeholder="Brand Name" class="form-control">
      </div>
      <input type="submit" value="Submit" class="btn btn-primary">
    {{Form::close()}}
  </div>

@endsection
