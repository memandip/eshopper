@extends('admin.admin')

@section('page_title') | Edit Product @endsection

@section('page-header') Edit Product @endsection

@section('content')

  <div class="col-md-12">
    <h1>Edit Brand Form <sup style="font-size:12px;">*All fields are required.</sup></h1>

    @include('inc/messages')

    {{Form::open(['enctype'=>'multipart/form-data'])}}
    <div class="col-md-6">

        <label for="productName">Product name:</label>
        <input type="text" name="product_name" id="productName" placeholder="Product name" class="form-control" value="{{old('product_name') ? old('product_name') : $product->product_name}}">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" placeholder="Product price" class="form-control" value="{{old('price') ? old('price') : $product->price}}">
        <label for="shortDesc">Short Description:</label>
        <textarea name="short_desc" id="shortDesc" placeholder="Short Description of the product" class="form-control" rows="10">{{old('short_desc') ? old('short_desc') : $product->short_desc}}</textarea>
        <label for="long_desc">Long Description:</label>
        <textarea name="long_desc" id="long_desc" placeholder="Long Description" class="form-control" rows="10">{{old('long_desc') ? old('long_desc') : $product->long_desc}}</textarea>

    </div>

    <div class="col-md-6">

      <label for="status">Status:</label>
      <select class="form-control" name="status" id="status">
        <option value="1" @if($product->status==1) {{'selected'}} @endif>Available</option>
        <option value="0" @if($product->status==0) {{'selected'}} @endif>Not-available</option>
      </select>
      <label for="shipping">Shipping:</label>
      <select class="form-control" name="shipping" id="shipping">
        <option value="1" @if(old('shipping')==1) {{'selected'}} @elseif($product->shipping==1) {{'selected'}} @endif>Yes</option>
        <option value="0"  @if(old('shipping')==0) {{'selected'}} @elseif($product->shipping==0) {{'selected'}} @endif >No</option>
      </select>
      <label for="brand">Brand:</label>
      <select class="form-control" name="brand">
        @foreach($brands as $brand)
        <option value="{{$brand->id}}" @if(old('brand')==$brand->id) {{'selected'}} @elseif($product->brand_id==$brand->id) {{'selected'}} @endif >{{$brand->brand_name}}</option>
        @endforeach
      </select>
      <label for="category">Category:</label>
      <select class="form-control" name="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}" @if(old('category')==$category->id) {{'selected'}} @elseif($product->category_id==$category->id) {{'selected'}} @endif >{{$category->category_name}}</option>
        @endforeach
      </select>
      <label for="gender">Gender:</label>
      <select class="form-control" name="gender" id="gender">
        <option value="male" @if(old('gender')=='male'){{'selected'}} @elseif($product->gender=='male'){{'selected'}} {{'selected'}} @endif>Male</option>
        <option value="female" @if(old('gender')=='female'){{'selected'}} @elseif($product->gender=='female'){{'selected'}} {{'selected'}} @endif>Female</option>
        <option value="other" @if(old('gender')=='other'){{'selected'}} @elseif($product->gender=='other'){{'selected'}} {{'selected'}} @endif>other</option>
      </select>
      <label for="image">Product Image:</label>
      <input type="file" name="image" id="image">
    </div>

    <div class="clearfix"></div>
    <br>
    <input type="submit" value="Submit" class="btn btn-primary">
    {{Form::close()}}
  </div>

@endsection
