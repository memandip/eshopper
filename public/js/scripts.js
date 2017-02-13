app.controller('eshopperController', ['$scope', '$http',function($scope, $http){

  $scope.baseUrl = baseUrl;

  $http.get(baseUrl+'cart/contents').success(function(datas){
    $scope.cartContents = datas.cartContents;
    $scope.cartTotal = datas.cartTotal;
    $scope.cartCount = datas.cartCount;
  });

  $scope.addToCart = function(id, name, qty, price){
    $.ajax({
      url:baseUrl+'cart/add',
      method:'PUT',
      data:{id:id, name:name, qty:qty, price:price },
      success:function(data){
        if(data.success==true){
          $http.get(baseUrl+'cart/contents').success(function(datas){
            $scope.cartCount = datas.cartCount;
            $scope.cartContents = datas.cartContents;
            $scope.cartTotal = datas.cartTotal;
          });
          $('#cartModal').modal('toggle');
        } else {
          console.log({error:'Product was not added to cart.'});
        }
      }
    });
  }

  $scope.deleteCartItem = function(id){
    var rowId = id;
    $.ajax({
      url:baseUrl+'cart/item/delete',
      method:'DELETE',
      data:{rowId:rowId},
      success:function(data){
        if(data.success == true){
          $http.get(baseUrl+'cart/contents').success(function(datas){
            $scope.cartCount = datas.cartCount;
            $scope.cartContents = datas.cartContents;
            $scope.cartTotal = datas.cartTotal;
          });
        }
      }
    });
  }

  $scope.manageItems = function(id, action){
    var rowId = id;
    $http.post(baseUrl+'cart/manageItems',{rowId:rowId, action:action})
    .success(function(datas){
      $scope.cartCount = datas.cartCount;
      $scope.cartContents = datas.cartContents;
      $scope.cartTotal = datas.cartTotal;
    });
  }

}]);