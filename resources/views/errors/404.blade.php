@extends('layouts.basic')

@section('content')
<div class="container text-center">
	<div class="content-404">
		<img src="{{url('images/404/404.png')}}" class="img-responsive" alt="" style="height:300px;"/>
		<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
		<h2><a href="" onclick="window.history.back()">Bring me back</a></h2>
	</div>
</div>
@endsection
