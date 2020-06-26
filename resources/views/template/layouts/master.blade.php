<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	@yield('css')

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	@yield('js')
</head>
<body>
	<!-- Grey with black text -->
	<!-- header start -->
	@include('template/layouts/header')
	<!-- header end -->

	<div class="container">
		<!-- body - container -->
		@yield('container')
	</div>

	<!-- footer -->
	@include('template/layouts/footer')
	<!-- footer end -->
</body>
</html>