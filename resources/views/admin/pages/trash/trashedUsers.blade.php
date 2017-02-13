@extends('admin.admin')

@section('page_title')  | trashed users @endsection

@section('page_title') | Trashed Users @endsection

@section('pagename')  / trashed users @endsection

@section('content')

<div class="col-md-12">
 @include('inc/messages')
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
    <thead>
      <tr>
        <th>SN</th>
        <th>Username</th>
        <th>Email</th>
        <th>Usertype</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $sn = 0; ?>
      @foreach($users as $user)
      <tr>
        <td>{{++$sn}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->group->group_name}}</td>
        <td id="user{{$user->id}}Status">{{$user->status==1 ? 'Activated':'Deactivated'}}</td>
        <td id="actions{{$user->id}}">
          <a href="#" onclick="restoreUser({{$user->id}})" title="Restore User">
            <button type="button" class="btn btn-info">
              <i class="icon-spinner11"></i>
            </button>
          </a>
          <a href="{{url('es/admin/user/'.$user->id.'/forceDelete')}}" title="Delete User Permanently">
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
  function restoreUser(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/user/"+id+"/restore",
      method:"GET",
      success:function(data){
        window.location.href = '';
      }
    });
  }
</script>

@endsection