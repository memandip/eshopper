@extends('admin.admin')

@section('page_title') | View User Groups @endsection

@section('pagename')  / view usergroups @endsection

@section('content')

<div class="col-md-12">

  @include('inc/messages')

  <table class="table-borderd table-striped table-condensed table-hover datatable-basic">
  	<thead>
  		<tr>
  			<th>SN</th>
  			<th>Group Name</th>
  			<th>Description</th>
        <th>Permissions</th>
  			<th>Actions</th>
  		</tr>
  	</thead>
  	<tbody>
  		<?php $sn = 1;?>
  		@foreach($usergroups as $usergroup)
  		<tr>
  			<td>{{$sn}}</td>
  			<td>{{$usergroup->group_name}}</td>
  			<td>{{$usergroup->description}}</td>
        <td>
          <a href="{{url('es/admin/usergroup')}}/{{$usergroup->id}}/viewpermissions">
            <button class="btn btn-primary">
              <span class="glyphicon glyphicon-eye-open"></span>
            </button>
          </a>
        </td>
  			<td>
  				<a href="{{url('es/admin/usergroup')}}/{{$usergroup->id.'/edit'}}">
  					<button class="btn btn-info">
  						<span class="glyphicon glyphicon-edit"></span>
  					</button>
  				</a>
  				<a href="{{url('es/admin/usergroup')}}/{{$usergroup->id.'/delete'}}">
  					<button class="btn btn-danger" onclick="return confirm('Do you really want to delete this group??')">
  						<span class="glyphicon glyphicon-trash"></span>
  					</button>
  				</a>
  			</td>
  		</tr>
  		<?php $sn++;?>
  		@endforeach
  	</tbody>
  </table>

 @endsection