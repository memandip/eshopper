@extends('admin.admin')

@section('page_title') | Add Product @endsection

@section('page-header') Add Product @endsection

@section('content')

  <div class="col-md-12">
    <h1>Add Brand Form <sup style="font-size:12px;">*All fields are required.</sup></h1>

    @include('inc/messages')

    {{Form::open(['enctype'=>'multipart/form-data'])}}
    <div class="col-md-6">

        <label for="productName">Product name:</label>
        <input type="text" name="product_name" id="productName" placeholder="Product name" class="form-control" value="{{old('product_name')}}">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" placeholder="Product price" class="form-control" value="{{old('price')}}">
        <label for="shortDesc">Short Description:</label>
        <textarea name="short_desc" id="shortDesc" placeholder="Short Description of the product" class="form-control" rows="10">{{old('short_desc')}}</textarea>
        <label for="long_desc">Long Description:</label>
        <textarea name="long_desc" id="long_desc" placeholder="Long Description" class="form-control" rows="10">{{old('long_desc')}}</textarea>

    </div>

    <div class="col-md-6">

      <label for="status">Status:</label>
      <select class="form-control" name="status" id="status">
        <option value="1" <?=old('status')==1 ? 'selected':''?> >Available</option>
        <option value="0" <?=old('status')==0 ? 'selected':''?> >Not-available</option>
      </select>
      <label for="shipping">Shipping:</label>
      <select class="form-control" name="shipping" id="shipping">
        <option value="1" <?=(old('status')==1) ? 'selected':''?> >Yes</option>
        <option value="0" <?=(old('status')==0) ? 'selected':''?> >No</option>
      </select>
      <label for="brand">Brand:</label>
      <select class="form-control" name="brand">
        @foreach($brands as $brand)
        <option value="{{$brand->id}}" <?=(old('brand')==$brand->id) ? 'selected':''?> >{{$brand->brand_name}}</option>
        @endforeach
      </select>
      <label for="category">Category:</label>
      <select class="form-control" name="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}"<?=(old('category')==$category->id) ? 'selected':''?>>{{$category->category_name}}</option>
        @endforeach
      </select>
      <label for="gender">Gender:</label>
      <select class="form-control" name="gender" id="gender">
        <option value="male" <?=(old('gender')=='male') ? 'selected':'' ?> >Male</option>
        <option value="female" <?=(old('gender')=='female') ? 'selected':'' ?> >Female</option>
        <option value="other" <?=(old('gender')=='other') ? 'selected':'' ?> >other</option>
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
