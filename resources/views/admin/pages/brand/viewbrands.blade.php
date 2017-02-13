@extends('admin.admin')

@section('page_title')
  | view brands
@endsection

@section('page-header')
  View Brands
@endsection

@section('pagename')
  / view brands
@endsection

@section('content')

<div class="col-md-12">
  @include('inc/messages')
  <div class="col-md-12">
    <h1>Add Brand Form <sup style="font-size:12px;">*fields with asterisk are mandatory.</sup></h1>
    {{Form::open(['url'=>'es/admin/addbrand'])}}
      <div class="form-group col-md-6">
        <input type="text" name="brand_name" value="{{old('brand_name')}}" id="brandName" placeholder="Brand Name" class="form-control">
      </div>
      <div class="form-group col-md-2">
        <input type="submit" value="Add brand" class="btn btn-primary">
      </div>
    {{Form::close()}}
  </div>
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
    <thead>
      <tr>
        <th>SN</th>
        <th>Brand</th>
        <th>Is deleted</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($brands as $brand)
      <tr>
        <td>{{++$sn}}</td>
        <td>{{$brand->brand_name}}</td>
        <td>{{$brand->trashed() ? 'Deleted' : 'Not deleted'}}</td>
        <td>
          @if($brand->trashed())
          <a href="#" onclick="restoreBrand({{$brand->id}})" title="Restore Brand">
            <button type="button" class="btn btn-success">
              <span class="icon-spinner11"></span>
            </button>
          </a>
          @else
          <a href="{{url('es/admin/brand/'.$brand->id.'/edit')}}" title="Edit brand">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-edit"></span>
            </button>
          </a>
          <a href="#" onclick="deleteBrand({{$brand->id}})" title="Delete Brand">
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

  function deleteBrand(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/brand/"+id+"/delete",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

  function restoreBrand(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/brand/"+id+"/restore",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

</script>

@endsection
