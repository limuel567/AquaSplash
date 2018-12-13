<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>@yield('title')</title>
		<link rel="icon" href="{{asset('frontend/css')}}/favicon.ico">
		@include('frontend.includes.css')
	</head>
	<body>
		@include('frontend.includes.header')
		@yield('sub-header')
			<main role="main" class="contents">
				@yield('content')
				@include('frontend.includes.footer')
			</main>
		@include('frontend.includes.js')
	</body>
</html>