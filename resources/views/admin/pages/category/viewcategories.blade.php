@extends('admin.admin')

@section('page_title')
  | view categories
@endsection

@section('page-header')
  View Categories
@endsection

@section('pagename')
  / view products
@endsection

@section('content')

<div class="col-md-12">
  
  @include('inc/messages')

  <div class="col-md-12">
    <h1>Add Category Form <sup style="font-size:12px;">*fields with asterisk are mandatory.</sup></h1>

    {{Form::open(['url'=>'es/admin/addcategory'])}}
      <div class="form-group col-md-6">
        <input type="text" name="category_name" value="{{old('category')}}" id="category" placeholder="Category Name" class="form-control">
      </div>
      <div class="form-group col-md-2">
        <input type="submit" value="Add category" class="btn btn-primary">
      </div>
    {{Form::close()}}
  </div>
  
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
    <thead>
      <tr>
        <th>SN</th>
        <th>Categories</th>
        <th>Deleted at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{++$sn}}</td>
        <td>{{$category->category_name}}</td>
        <td>{{$category->trashed() ? $category->deleted_at : 'Not-deleted'}}</td>
        <td>
          @if($category->trashed())
          <a href="#" onclick="restoreCategory({{$category->id}})" title="Delete Category">
            <button type="button" class="btn btn-success">
              <span class="icon-spinner11"></span>
            </button>
          </a>
          @else
          <a href="{{url('es/admin/category/'.$category->id.'/edit')}}" title="Edit product">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-edit"></span>
            </button>
          </a>
          <a href="#" onclick="deleteCategory({{$category->id}})"  title="Delete Category">
            <button type="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('footer')

<script type="text/javascript">

  function deleteCategory(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/category/"+id+"/delete",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

  function restoreCategory(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/category/"+id+"/restore",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

</script>

@endsection
