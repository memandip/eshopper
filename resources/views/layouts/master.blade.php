<!DOCTYPE html>
<html lang="en" ng-app="eshopper">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
	<link href="{{url('css/main.css')}}" rel="stylesheet">
    <link href="{{url('css/styles.css')}}" rel="stylesheet">
    <link href="{{url('css/responsive.css')}}" rel="stylesheet">
    @yield('styles')
    <script src="{{url('js/angular.min.js')}}"></script>
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
      var app = angular.module('eshopper',[]);
      var baseUrl = '{{url('')}}/';
  	</script>
    <script src="{{url('js/scripts.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body ng-controller="eshopperController" ng-cloak>
  
  	@include('inc/header')

	@yield('slider')

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php $counter = 0; ?>
						@foreach($categories as $category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a @if($category->hasChild($category->id)) data-toggle="collapse" data-parent="#accordian" href="#{{$category->category_name}}" @endif>
					                      @if($category->hasChild($category->id))
					                      <span class="badge pull-right">
					                        <i class="fa fa-plus"></i>
					                      </span>
					                      @endif
					                      	<a @if($category->hasChild($category->id)) href="{{url('category').'/'.$category->id}}" @endif>
						                        {{$category->category_name}}
						                    </a>
										</a>
									</h4>
								</div>
                				@if($category->hasChild($category->id))
								<div id="{{$category->category_name}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php $sn = 0; ?>
                      						@foreach($category->getAllChildren($category->id) as $child)
											<li><a href="{{url('product').'/'.$child->id}}">{{$child->product_name}}</a></li>
											<?php $sn++; if($sn>=6) break; ?>
                      						@endforeach
										</ul>
									</div>
								</div>
                				@endif
							</div>
							<?php $counter++; if($counter>=11) break; ?>
             				@endforeach
						</div><!--/category-products-->

						@if(!isset($productDetailsActive))
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php $sn = 0; ?>
                				@foreach($brands as $brand)
									<li>
										<a @if($brand->hasChild($brand->id)) href="{{url('brand').'/'.$brand->id}}" @endif>{{$brand->brand_name}}</a>
									</li>
									<?php $sn++; if($sn>=25) break; ?>
                				@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						@endif
					</div>
          			<br>
				</div>

				@yield('content')

			</div>
			

		</div>

    <div class="clearfix"></div>

    <div class="recommended_items"><!--recommended_items-->
      <div class="col-md-12 col-sm-12">
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php $sn = 0;?>
            @foreach($categories as $category)
            <?php $i = 0; ?>
            @if($category->hasChild($category->id))
            <div class="item {{$sn == 0 ? 'active':''}}">
              @foreach($category->getAllChildren($category->id) as $child)
              <div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{url('images/products').'/'.$child->image}}" alt="" height="268" width="134">
											<h2>{{'Rs. '.$child->price}}</h2>
											<p>{{$child->product_name}}</p>
                      <a ng-click="addToCart({{$child->id}},'{{$child->product_name}}',1,{{$child->price}})" class="btn btn-default add-to-cart">
												<i class="fa fa-shopping-cart"></i>Add to cart
											</a>
											<a href="{{url('product').'/'.$child->id}}" class="btn btn-default add-to-cart">
												<i class="glyphicon glyphicon-eye-open"></i> view details
											</a>
										</div>
									</div>
								</div>
              </div>
              <?php $i++; if($i==4){break;} ?>
              @endforeach
            </div>
            <?php $sn++; if($sn == 3){break;}?>
            @endif
            @endforeach
          </div>

           <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
        </div>
      </div>
    </div><!--/recommended_items-->

	</section>

	@include('inc/cartModal')

	@include('inc/footer')

</body>
</html>
