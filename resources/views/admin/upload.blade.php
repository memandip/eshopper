@extends('admin.admin')

@section('page_title')
  | upload page
@endsection

@section('page-header')
  Upload media
@endsection

@section('pagename')
  / upload media
@endsection

@section('headScripts')
<!-- Load plugin -->
<script type="text/javascript" src="{{url('assets/js/plugins/uploaders/dropzone.min.js')}}"></script>

@endsection

@section('content')

<div class="col-md-12">
	
<div class="form">
	<!-- Add form markup -->
	<form class="dropzone" id="dropzone_multiple" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">   
    </form>
</div>

</div>

@endsection

@section('scripts')

<script type="text/javascript">
$("#dropzone_multiple").dropzone({
    paramName: "file", // The name that will be used to transfer the file
    url:baseUrl+'image/upload',
    dictDefaultMessage: 'Drop files to upload <span>or CLICK</span>',
    maxFilesize: 3 // MB
});
</script>

@endsection