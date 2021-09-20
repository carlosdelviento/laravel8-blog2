<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
	{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- favicon -->
	<!-- estilos -->

	<style>
		.active{
			color: red;
			font-weight: bold; 
		}
	</style>
</head>
<body>
	<!-- header -->
	<!-- nav -->
	
	@include('layouts.partials.header')


	@yield('content')

	<!-- footer -->
	
	@include('layouts.partials.footer')

	<!-- script -->
</body>
</html>