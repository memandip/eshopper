<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr ng-if="cartContents" ng-repeat="cart in cartContents" ng-init = "rowId = cart.rowId">
		            	<td class="cart_product">
		                	<img src="@{{baseUrl+'images/products/'+cart.image}}" alt="" height="100px" width="80px"/>
		              	</td>
		              	<td class="cart_description" style="padding:10px;">
		                	<h4>@{{cart.name}}</h4>
		              	</td>
		              	<td class="cart_price">
		                	<p>@{{'Rs. '+cart.price}}</p>
		              	</td>
		              	<td class="cart_quantity">
			                <div class="cart_quantity_button">
												<button class="btn btn-info" ng-click="manageItems(rowId, 'add')">
			                    <span class="glyphicon glyphicon-plus"></span>
			                  </button>
												<strong style="padding:10px;"> @{{cart.qty}} </strong>
												<button class="btn btn-info" ng-click="manageItems(rowId, 'sub')">
			                    <span class="glyphicon glyphicon-minus"></span>
			                  </button>
											</div>
						</td>
		              	<td class="cart_total">
		                	<p>@{{'Rs. '+cart.total}}</p>
		              	</td>
		              	<td>
		                	<a class="cart_quantity_delete cart_delete" ng-click="deleteCartItem(rowId)">
		                  		<button class="btn btn-warning">
		                    		<i class="fa fa-times"></i>
		                  		</button>
		                	</a>
		              	</td>
            		</tr>
					<tr ng-if="cartContents">
              			<td>Total</td>
              			<td colspan="5">@{{'Rs. '+cartTotal.total}}</td>
            		</tr>
		            <tr ng-if="!cartContents">
		              	<td colspan="6"><h4>Cart is empty.</h4></td>
		            </tr>
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action" ng-if="cartContents">
	<div class="container">
		<div class="col-sm-6">
			<div class="total_area">
				<ul>
					<li>Cart Sub Total <span>@{{'Rs. '+cartTotal.total}}</span></li>
					<li>Eco Tax <span>0</span></li>
					<li>Shipping Cost <span>Free</span></li>
					<li>Total <span>@{{'Rs. '+cartTotal.total}}</span></li>
				</ul>
				@if(!isset($checkoutActive))
					<a class="btn btn-default check_out" href="{{url('checkout')}}">Proceed to Check Out</a>
				@else
					<a class="btn btn-default check_out" href="{{url('checkout/confirmation')}}">
						Confirm Checkout
					</a>
				@endif
			</div>
		</div>
	</div>
</section><!--/#do_action-->