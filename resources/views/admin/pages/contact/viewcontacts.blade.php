@extends('admin.admin')

@section('page_title')  | view contacts @endsection

@section('page_title') | View Contacts @endsection

@section('pagename')  / view contacts @endsection

@section('content')

<div class="col-md-12">
	@include('inc/messages')
	<table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
		<thead>
			<tr>
				<th>SN</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $sn = 1;?>
			@foreach($contacts as $contact)
			<tr>
				<td>{{$sn}}</td>
				<td>{{$contact->name}}</td>
				<td>{{$contact->email}}</td>
				<td>{{$contact->subject}}</td>
				<td>
					<button class="btn btn-primary" title="View Contact Message" onclick="showcontact({{$contact->id}})">
						<span class="glyphicon glyphicon-eye-open"></span>
					</button>
					<a href="mailto:{{$contact->email}}" title="Reply">
						<button class="btn btn-info">
							<span class="icon-reply"></span>
						</button>
					</a>
					<a href="{{url('es/admin/contact')}}/{{$contact->id}}/delete" title="Delete Contact" onclick="return confirm('Do you really want to delete this contact message??')">
						<button class="btn btn-danger">
							<span class="icon-trash"></span>
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

<div class="modal fade" id="contactModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
        <hr>
      </div>
      <div class="modal-body"></div>
      <div class="pull-right other-info col-md-4"></div>
      <div class="clearfix"></div>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@section('scripts')

<script type="text/javascript">
	function showcontact(id){
		$.ajax({
			url:"{{url('')}}"+'/es/admin/contact/'+id+'/view',
			method:"GET",
			success:function(data){
				var contact = data.contact;
				var parent = $("#contactModal");
				var otherInfo = '<p>Send By -> '+contact.name+'</p>';
				otherInfo += '<p>Contact no -> '+contact.phone+'</p>';
				otherInfo += '<p>Email -> '+contact.email+'</p>';
				parent.find('.modal-title').html(contact.subject);
				parent.find('.modal-body').html(contact.message);
				parent.find('.other-info').html(otherInfo);
				$('#contactModal').modal('toggle');
			}
		});
	}
</script>

@endsection