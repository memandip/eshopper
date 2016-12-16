@extends('admin.admin')

@section('pagename') / view usergroup permissions @endsection

@section('content')

<div class="col-md-12">
    <h1>View User Group Permissions</h1>

    {{Form::open()}}

    @include('inc/messages')

    <table class="table table-bordered table-striped table-hover datatable-basic">
    	<thead>
    		<tr>
    			<th>SN</th>
    			<th>Permissions name</th>
    			<th>Status</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $sn = 1;?>
    		@foreach($permissions as $p)
    		<tr>
    			<td>{{$sn}}</td>
    			<td>{{$p->name}}</td>
    			<td>
    				<input type="checkbox" name="permission[{{$p->id}}]" {{$usergroup->hasPermission( $usergroup->id,$p->id) ? 'checked':''}}>
    			</td>
    		</tr>
    		<?php $sn++; ?>
    		@endforeach
    	</tbody>
    </table>

    <input type="submit" name="btnSubmit" value="Save" class="btn btn-primary">

    {{Form::close()}}

</div>

@endsection