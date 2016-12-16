@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
@endsection

@section('content')

	@include('public/pages/inc/productOf')

@endsection

@section('scripts')
	<script src="{{url('js/lightbox.min.js')}}"></script>
@endsection