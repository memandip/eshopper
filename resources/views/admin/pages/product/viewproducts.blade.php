@extends('admin.admin')

@section('page_title')
  | view products
@endsection

@section('page-header')
  View Products
@endsection

@section('pagename')
  / view products
@endsection

@section('content')

<div class="col-md-12">
  @include('inc/messages')
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic media-library">
    <thead>
      <tr>
        <th>SN</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Image</th>
        <th>Deleted at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr role="row">
        <td>{{++$sn}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->categoryName($product->category_id)}}</td>
        <td>{{$product->brandName($product->brand_id)}}</td>
        <td>
            <a class="fancybox" rel="group" href="{{url('images/products')}}/{{$product->image}}">
              <img src="{{url('images/products')}}/{{$product->image}}" alt="" class="img-rounded img-preview">
            </a>
            <!-- <a href="{{url('images/products')}}/{{$product->image}}" data-popup="lightbox">
              <img src="{{url('images/products')}}/{{$product->image}}" alt="" class="img-rounded img-preview">
            </a> -->
        </td>
        <td>{{$product->trashed() ? $product->deleted_at:'Not-deleted'}}</td>
        <td>
          @if($product->trashed())
          <a href="#" onclick="restoreProduct({{$product->id}})" title="Restore Product">
            <button type="button" class="btn btn-success">
              <span class="icon-spinner11"></span>
            </button>
          </a>
          @else
          <a href="{{url('es/admin/product/'.$product->id.'/edit')}}" title="Edit product">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-edit"></span>
            </button>
          </a>
          <a href="#" onclick="deleteProduct({{$product->id}})" title="Delete Product">
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

  // Initialization of fancybox
  $(document).ready(function() {
    $(".fancybox").fancybox({
      loop:false
    });
  });

  function deleteProduct(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/product/"+id+"/delete",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

  function restoreProduct(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/product/"+id+"/restore",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }

</script>

@endsection
