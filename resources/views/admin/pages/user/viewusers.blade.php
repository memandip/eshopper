@extends('admin.admin')

@section('page_title')  | view users @endsection

@section('page_title') | View Users @endsection

@section('pagename')  / view users @endsection

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
      @foreach($users as $user)
      <tr>
        <td>{{++$sn}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->group->group_name}}</td>
        <td id="user{{$user->id}}Status">{{$user->status==1 ? 'Activated':'Deactivated'}}</td>
        <td id="actions{{$user->id}}">
          @if(!$user->trashed())
            <a href="{{url('es/admin/user/'.$user->id.'/edit')}}" title="Edit User">
              <button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-edit"></span>
              </button>
            </a>
            @if($user->status==1)
            <a id="{{$user->id}}" user-status="{{$user->status}}" onclick="deactivateUser({{$user->id}})" href="#" title="Deactivate">
              <button type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-remove"></span>
              </button>
            </a>
            @else
            <a id="{{$user->id}}" user-status="{{$user->status}}" onclick="activateUser({{$user->id}})" href="#" title="Activate">
              <button type="button" class="btn btn-success">
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </a>
            @endif
          @endif
          @if($user->trashed())
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
          @else
           <a href="#" id="deleteUser" onclick="deleteUser({{$user->id}})" onclick="return confirm('Do you really want to delete this user ?')"   title="Delete User">
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

  function deactivateUser(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/user/"+id+"/deactivate",
      method:"GET",
      success:function(data){
        var $this = $('#'+id);
        var child = $this.children();
        child.removeClass('btn-warning').addClass('btn-success');
        child.children().removeClass('glyphicon-remove').addClass('glyphicon-ok');
        $this.attr('onclick','activateUser('+id+')');
        $('#user'+id+'Status').html(toggleStatus($this.attr('user-status')));
        $this.attr('user-status',0);
      }
    });
  }

  function activateUser(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/user/"+id+"/activate",
      method:"GET",
      success:function(data){
        var $this = $('#'+id);
        var child = $this.children();
        child.removeClass('btn-success').addClass('btn-warning');
        child.children().removeClass('glyphicon-ok').addClass('glyphicon-remove');
        $this.attr('onclick','deactivateUser('+id+')');
        $('#user'+id+'Status').html(toggleStatus($this.attr('user-status')));
        $this.attr('user-status',1);
      }
    });
  }

  function toggleStatus(status){
    var userStatus = (status == 1) ? 'Deactivated' : 'Activated';
    return userStatus;
  }

  function deleteUser(id){
    $.ajax({
      url:"http://localhost/eshopper/public/es/admin/user/"+id+"/delete",
      method:"GET",
      success:function(data){
        var $this = $('#actions'+id);
        var output = '<a href="#" ';
        output +=  'onclick="restoreUser('+id+')" ';
        output += 'title="Restore User"><button type="button" class="btn btn-info"><i class="icon-spinner11"></i></button></a>';
        output += '<a href="'+baseUrl+'/es/admin/user/'+id+'/forceDelete" ';
        output += 'title="Delete User Permanently"><button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button></a>';
        $this.html(output);
      }
    });
  }

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
