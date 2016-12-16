@if($errors->all())
<div class="error">
	<ul class="list-group">
	@foreach($errors->all() as $error)
		<li class="list-group-item">{{$error}}</li>
	@endforeach
	</ul>
</div>
@endif

@if(Session('success'))
  <div class="alert alert-success no-border">
    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
    <strong>{{Session('success')}}</strong>
  </div>
@endif