<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>eMed Nepal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Nepal largest online retail pharmacy" />
	<meta name="keywords" content="Nepal largest online retail pharmacy, eMed Nepal" />
	<meta name="author" content="eMed Nepal" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	@include('front.partials.styles')
    @yield('styles')
	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	    <x-header />
	    <x-footer />
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    @include('front.partials.scripts')
    @yield('scripts')
	</body>
</html>

