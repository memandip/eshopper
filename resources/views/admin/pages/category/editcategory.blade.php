@extends('admin.admin')

@section('page_title') | Edit Category @endsection

@section('page-header') Edit Category @endsection

@section('content')

  <div class="col-md-12">
    <h1>Edit Brand Form</h1>

    @include('inc/messages')

    {{Form::open()}}
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="category_name" value="{{old('category') ? old('category') : $category->category_name}}" id="category" placeholder="Category Name" class="form-control">
      </div>
      <input type="submit" value="Submit" class="btn btn-primary">
    {{Form::close()}}
  </div>

@endsection
