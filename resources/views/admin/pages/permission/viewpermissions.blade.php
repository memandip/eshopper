@extends('admin.admin')

@section('page_title')
  | view permissions
@endsection

@section('page-header')
  View Permissions
@endsection

@section('pagename')
  / view permissions
@endsection

@section('content')

<div class="col-md-12">
	<h1>List of all available permissions</h1>
	<hr>
	@include('inc/messages')
	<table class="table table-bordered table-striped table-condensed table-hover datatable-basic">
		<thead>
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Description</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $sn = 1;?>
			@foreach($permissions as $p)
			<tr>
				<td>{{$sn}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->description}}</td>
				<td>
					<a href="{{url('es/admin/permission')}}/{{$p->id}}/edit">
						<button class="btn btn-info">
							<span class="glyphicon glyphicon-edit"></span>
						</button>
					</a>
					<a href="{{url('es/admin/permission')}}/{{$p->id}}/delete" onclick="return confirm('Do you really want to delete this permission ?');">
						<button class="btn btn-danger">
							<span class="glyphicon glyphicon-trash"></span>
						</button>
					</a>
				</td>
			</tr>
			<?php $sn++; ?>
			@endforeach
		</tbody>
	</table>

</div>

@endsection