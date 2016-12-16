@extends('layouts.basic')

@section('content')

	@if(Session('success'))

		<div class="alert alert-warning fade in" role="alert">
	      	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	      	{{Session('success')}}
	    </div>

	@else

		<script type="text/javascript">
			window.location.href=baseUrl;
		</script>

	@endif

@endsection