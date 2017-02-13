@extends('admin.admin')

@section('page_title')  | trashed customers @endsection

@section('page_title') | Trashed Customers @endsection

@section('pagename')  / trashed customers @endsection

@section('content')

<div class="col-md-12">
 @include('inc/messages')
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
    <thead>
      <tr>
        <th>SN</th>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $sn = 0; ?>
      @foreach($customers as $customer)
      <tr>
        <td>{{++$sn}}</td>
        <td>{{$customer->username}}</td>
        <td>{{$customer->email}}</td>
        <td id="user{{$customer->id}}Status">{{$customer->status==1 ? 'Activated':'Deactivated'}}</td>
        <td id="actions{{$customer->id}}">
          <a href="#" onclick="restoreCustomer({{$customer->id}})" title="Restore Customer">
            <button type="button" class="btn btn-info">
              <i class="icon-spinner11"></i>
            </button>
          </a>
          <a href="{{url('es/admin/customer/'.$customer->id.'/forceDelete')}}" title="Delete Customer Permanently">
            <button type="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </a>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
  function restoreCustomer(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/customer/"+id+"/restore",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }
</script>

@endsection