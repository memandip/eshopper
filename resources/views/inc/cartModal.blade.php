<div class="modal fade" id="cartModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Cart Items</h4>
      </div>
      <div class="modal-body">
        <table class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-if="cartContents" ng-repeat="cart in cartContents"  ng-init = "rowId = cart.rowId">
              <td>
                <img class="img-circle" src="@{{baseUrl+'images/products/'+cart.image}}" alt="" height="100px" width="100px"/>
              </td>
              <td style="padding:10px;">
                <h4>@{{cart.name}}</h4>
              </td>
              <td>
                <p>@{{'Rs. '+cart.price}}</p>
              </td>
              <td>
                <div class="cart_quantity_button">
                  
									<button class="btn btn-info" ng-click="manageItems(rowId, 'add')" ng-disabled = "cart.qty >= 10">
                    <span class="glyphicon glyphicon-plus"></span>
                  </button>
									<strong style="padding:10px;"> @{{cart.qty}} </strong>
									<button class="btn btn-info" ng-click="manageItems(rowId, 'sub')" ng-disabled = "cart.qty <= 1">
                    <span class="glyphicon glyphicon-minus"></span>
                  </button>
								</div>
              </td>
              <td>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->