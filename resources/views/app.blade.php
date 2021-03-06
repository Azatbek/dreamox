<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{!! asset('images') !!}/favicon.ico" type="image/x-icon">
	<link rel="icon" href="{!! asset('images') !!}/favicon.ico" type="image/x-icon">
@if(isset($product))
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$product->title}}" />
    <meta property="og:url" content="{{URL::current()}}" />
    <meta property="og:description" content="{!!$product->anons!!}" />
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="{!! asset('images') !!}/{{$product->img}}" />
@else
	<meta property="og:type" content="article" />
    <meta property="og:title" content="Dream Brox" />
    <meta property="og:url" content="{{URL::current()}}" />
    <meta property="og:description" content="Your dream box" />
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="{!! asset('images/logo.jpg') !!}" />
@endif


    <title>Your Dream Box</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/shop-homepage.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/lightslider.min.css') !!}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Navigation -->
	 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			 <div class="container">
					 <!-- Brand and toggle get grouped for better mobile display -->
					 <div class="navbar-header">
							 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
							 </button>
							 <a class="navbar-brand" href="{{URL::to('/')}}">Your Dream Box</a>
					 </div>
					 <!-- Collect the nav links, forms, and other content for toggling -->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
									 <li>
											 <a href="#" class="pink">О нас</a>
									 </li>
									 <li>
											 <a href="{{URL::to('/products')}}" class="pink">Магазин</a>
									 </li>
							 </ul>
					 </div>
					 <!-- /.navbar-collapse -->
			 </div>
			 <!-- /.container -->
	 </nav>

	@yield('content')

	<div class="container">

		<hr>

		<!-- Footer -->
		<footer>
				<div class="row">
						<div class="col-lg-12">
								<p>Сделано у Азатбека и Адильбека :)</p>
						</div>
				</div>
		</footer>

	</div>
	<!-- /.container -->
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="{!! asset('js/lightslider.min.js') !!}"></script>
  <script id="dsq-count-scr" src="//http-yourdreambox-kz.disqus.com/count.js" async></script>
  <script>
  $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9
  });
  </script>
</body>
</html>
