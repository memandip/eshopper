<!DOCTYPE html>
<html lang="en" ng-app="eshopper">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="http://localhost/eshopper/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/eshopper/public/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/eshopper/public/css/prettyPhoto.css" rel="stylesheet">
    <link href="http://localhost/eshopper/public/css/main.css" rel="stylesheet">
    <link href="http://localhost/eshopper/public/css/styles.css" rel="stylesheet">
  	<link href="http://localhost/eshopper/public/css/responsive.css" rel="stylesheet">
  	<style type="text/css">
  		.container{
  			margin-top:10%;
  		}
  		body{
  			background-color: lightblue;
  		}
  	</style>
    
</head><!--/head-->

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					@foreach($errors->all() as $error)
						<p class="error">{{$error}}</p>
					@endforeach
					{{Form::open()}}
						<input type="email" name="email" placeholder="Email Address" value=""/>
						<input type="password" name="password" placeholder="Password" />
						<span>
							<input type="checkbox" class="checkbox" name="remember_me">
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					{{Form::close()}}
				</div><!--/login form-->
			</div>
			</div>
		</div>
	</div>

</body>
</html>
