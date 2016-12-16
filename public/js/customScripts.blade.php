<script type="text/javascript">


app.controller('eshopperController', ['$scope', '$http',function($scope, $http){

  $http.get('{{url('cart/contents')}}').success(function(datas){
    $scope.cartContents = datas;
  });

  $http.get('{{url('cart/total')}}').success(function(data){
    $scope.cartTotal = data;
  });

  $scope.addToCart = function(id, name, qty, price){
    $.ajax({
      url:'{{url('cart/add')}}',
      method:'POST',
      data:{id:id, name:name, qty:qty, price:price, _token:'{{csrf_token()}}' },
      success:function(data){
        if(data.success==true){
          $http.get('{{url('cart/contents')}}').success(function(datas){
            $scope.cartContents = datas;
          });
          $http.get('{{url('cart/total')}}').success(function(data){
            $scope.cartTotal = data;
          });
          $('#cartModal').modal('toggle');
        } else {
          console.log({error:'Product was not added to cart.'});
        }
      }
    });
  }

  $scope.deleteCartItem = function(id){
    $.ajax({
      url:'{{url('cart/item/delete')}}',
      data:{id:id, _token:'{{csrf_token()}}' },
      success:function(data){
        if(data==true){
          alert('Hello World!!');
          $http.get('{{url('cart/contents')}}').success(function(datas){
            $scope.cartContents = datas;
          });
          $http.get('{{url('cart/total')}}').success(function(data){
            $scope.cartTotal = data;
          });
        } else {
          console.log({error:'Unable to delete cart item.'});
        }
      }
    });
  }

}]);

</script>
