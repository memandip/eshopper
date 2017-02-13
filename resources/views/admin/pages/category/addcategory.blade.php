@extends('admin.admin')

@section('page_title') | Add Category @endsection

@section('page-header') Add Category @endsection

@section('content')

  <div class="col-md-12">
    <h1>Add Category Form <sup style="font-size:12px;">*fields with asterisk are mandatory.</sup></h1>

    @include('inc/messages')

    {{Form::open()}}
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="category_name" value="{{old('category_')}}" id="category" placeholder="Category Name" class="form-control">
      </div>
      <input type="submit" value="Submit" class="btn btn-primary">
    {{Form::close()}}
  </div>

@endsection
