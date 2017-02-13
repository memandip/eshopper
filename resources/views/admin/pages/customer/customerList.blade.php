@extends('admin.admin')

@section('page_title')
  | view customers
@endsection

@section('page-header')
  View Customers
@endsection

@section('pagename')
  / view customers
@endsection

@section('headScripts')

<script type="text/javascript">
	app.controller('customerController', ['$scope', '$http', function($scope, $http){
		$scope.baseUrl = baseUrl;
		$scope.offset = 0;
		
		$http
			.get(baseUrl+'api/get/customers/'+$scope.offset)
			.success(function(data){
				$scope.customers = data.customers;
				$scope.pages = data.pages;
				$scope.totalCustomers = data.totalCustomers;
				$scope.page = data.currentPage;
				$scope.perpage = data.perpage;
			});;

		$scope.activate = function(id){
			$http
			.get(baseUrl + 'api/customer/'+id+'/activate')
			.success(function(data){
				if(data.success){
					$http.get(baseUrl+'api/get/customers/'+$scope.offset).success(function(data){
						$scope.customers = data.customers;
					});
				}
			});
		}

		$scope.deactivate = function(id){
			$http
			.get(baseUrl + 'api/customer/'+id+'/deactivate').success(function(data){
				if(data.success){
					$http.get(baseUrl+'api/get/customers/'+$scope.offset).success(function(data){
						$scope.customers = data.customers;
					});
				}
			});
		}

		$scope.paginate = function(page){
			$scope.offset = (page - 1) * 10;
			$scope.offset = $scope.offset == 0 ? 0 : $scope.offset;
			$http
			.get(baseUrl+'api/get/customers/'+$scope.offset)
			.success(function(data){
				$scope.customers = data.customers;
				$scope.pages = data.pages;
				$scope.totalCustomers = data.totalCustomers;
				$scope.page = page;
				$scope.perpage = data.perpage;
			});;
		}


	}]);
</script>

@endsection

@section('content')

<div class="col-md-12" ng-controller="customerController" ng-cloak>

  @include('inc/messages')

	<div class="col-md-4" style="margin-bottom: 10px; margin-top: -10px;">
  		<input class="form-control" placeholder="Search Customer" ng-model="search">
  	</div>

  <table class="table table-bordered table-hover table-striped table-condensed">
    
    <thead>
    	<tr>
    		<th>Name</th>
    		<th>Email</th>
    		<th>Username</th>
    		<th>Status</th>
    		<th>Actions</th>
    	</tr>
    </thead>

    <tbody>
    	<tr ng-repeat="customer in customers | filter:search">
    		<td>@{{customer.full_name}}</td>
    		<td>@{{customer.email}}</td>
 			<td>@{{customer.username}}</td>
 			<td>@{{customer.status == 1 ? 'Active' : 'Not-active'}}</td>
 			<td>
 				<a ng-if="!customer.status" ng-click="activate(customer.id)">
 					<button class="btn btn-success">
 						<span class="glyphicon glyphicon-ok"></span>
 					</button>
 				</a>
 				<a ng-if="customer.status" ng-click="deactivate(customer.id)">
 					<button class="btn btn-warning">
 						<span class="glyphicon glyphicon-remove"></span>
 					</button>
 				</a>
 				<a href="{{url('es/admin/customer')}}/@{{customer.id}}/delete">
 					<button class="btn btn-danger">
 						<span class="glyphicon glyphicon-trash"></span>
 					</button>
 				</a>
 			</td>
    	</tr>
    </tbody>

  </table>

<div class="datatable-footer">
	<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
		Showing @{{((page - 1)* perpage ) + 1}} to @{{page * perpage > totalCustomers ? totalCustomers : page * perpage}} of @{{totalCustomers}} customers
	</div>
  	<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
  		<ul class="pagination">
		  <li ng-repeat="page in pages">
		  	<a class="paginate_button" aria-controls="DataTables_Table_0" data-dt-idx="page" tabindex="0" ng-click="paginate(page)">@{{page}}</a>
		  </li>
		</ul>
  	</div>

</div>

</div>

@endsection

@section('scripts')

<script type="text/javascript">
	// $('.paginate_button').on('click', function(){
	// 	$(this).siblings().removeClass('current');
	// 	$(this).not('.previous').not('.next').addClass('current');
	// });

	// $('.next').on('click', function(){
	// 	var current = $('.dataTables_paginate').find('.current');
	// 	if(current.next().hasClass('paginate_button')){
	// 		current.removeClass('current').next().addClass('current');
	// 	}	else 	{
	// 		$(this).addClass('disabled');
	// 		$('.previous').removeClass('disabled');
	// 	}
	// });
	// $('.previous').on('click', function(){
	// 	var current = $('.dataTables_paginate').find('.current');
	// 	if(current.prev().hasClass('paginate_button')){
	// 		current.removeClass('current').prev().addClass('current');
	// 	}	else 	{
	// 		$(this).addClass('disabled');
	// 		$('.next').removeClass('disabled');
	// 	}
	// });
</script>

@endsection