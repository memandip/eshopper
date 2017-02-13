@section('styles')
	<link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
@endsection


@if(Session('success'))
  <div class="alert alert-success no-border">
    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
    <strong>{{Session('success')}}</strong>
  </div>
@endif
@if(count($transactions) > 0)
	<table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
		<thead>
			<tr>
				<th>SN</th>
				<th>Total Amount</th>
				<th>Payment Method</th>
				<th>Transaction date</th>
			</tr>		
		</thead>
		<tbody>
			<?php $sn = 1; ?>
			@foreach($transactions as $t)
			<tr>
				<td>{{$sn}}</td>
				<td>{{$t->total_amount}}</td>
				<td>{{$t->payment_method}}</td>
				<td>{{$t->created_at->format('M - d, Y')}}</td>
			</tr>
			<?php $sn++; ?>
			@endforeach
		</tbody>
	</table>
@else

	<h1>No transactions available.</h1>

@endif

@section('scripts')

<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/pages/datatables_basic.js')}}"></script>

<script type="text/javascript">
	//Datatable Basic initialization
	$('.datatable-basic').DataTable({
		autoWidth: false,
		dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
			language: {
					search: '<span>Filter:</span> _INPUT_',
					lengthMenu: '<span>Show:</span> _MENU_',
					paginate: { 'first': 'First', 'last': 'Last', 'next': '→', 'previous': '←' }
			},
			drawCallback: function () {
					$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
			},
			preDrawCallback: function() {
					$(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
			}
	});

	$('.dataTables_filter label').css('margin-top','29px');

</script>

@endsection