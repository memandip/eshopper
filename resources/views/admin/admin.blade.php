<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN PANEL @yield('page_title')</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('css/styles.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/angular.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/media/fancybox.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/gallery_library.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/datatables_basic.js')}}"></script>
	<!-- /theme JS files -->

	<script type="text/javascript">
		var baseUrl = "{{url('')}}";
	</script>

</head>

<body>

	@include('admin/inc/navbar')


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			@include('admin/inc/sidebar')

			<!-- Main content -->
			<div class="content-wrapper">


					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i>@yield('page-header')</h4>
						</div>
					<a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{url('')}}"><i class="icon-home2 position-left"></i> Home </a>/ <a href="{{url('es/admin')}}">dashboard</a> @yield('pagename')</li>
						</ul>
						<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>


					<div class="content">
						@yield('content')
					</div>

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<footer>
		@yield('footer')
		@yield('scripts')
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
		</script>
	</footer>

</body>
</html>
