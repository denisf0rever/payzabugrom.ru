<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />

    <link rel="canonical" href="https://payzabugrom.ru/@yield('canonical')" />

	<meta name="keywords" content="@yield('keywords')" />
	<meta name="description" content="@yield('description')" />
	<meta name="title" content="@yield('title')" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta property="og:title" content="@yield('title')"/>
	<meta property="og:description" content="@yield('description')">
	<meta property="og:image" content="/logoimage.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://payzabugrom.ru/">
	<meta property="og:site_name" content="@yield('title')е">
	<link rel="image_src" href="/logoimage.jpg" />
	<meta name="theme-color" content="#fff">

	@vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
</head>
<body>
	@include('parts.header')
	
    <main class="main">
		@yield('content')
	</main>  
	@include('parts.footer')
</body>
</html>