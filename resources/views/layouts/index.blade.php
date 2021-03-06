<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>MEMORIES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link rel="icon" href="{{ asset('/favicon.ico') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />

	<!-- //----------- -->
	<!-- Scripts -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<!-- Styles -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
</head>

<body class="homepage is-preload">
	<style>
		.xd {
			color: black;
		}
	</style>
	<header class="header">
		@include('layouts.menu')
	</header>
	<div id="page-wrapper">
		<!-- Header -->
		<section id="header" class="wrapper">
			<!-- Logo -->
			<div id="logo">
				<h1><a href="{{route('login')}}">MEMORIES</a></h1>
				<p>Los recuerdos lo son todo</p>
			</div>
			<!-- Nav -->
		</section>
		@yield('appblade')
		<div style="height: 150px; overflow: hidden;">
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
				<path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ff8000;">
				</path>
			</svg>
		</div>
		<!-- Intro -->
	</div>
	<!-- Script dropzone-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		Dropzone.options.myAwesomeDropzone = {
			headers: {
				'X-CSRF-TOKEN': "{{ csrf_token() }}"
			},
			dictDefaultMessage: "Arrastre o toque para subir su archivo",
			//          Imagenes
			acceptedFiles: "image/*",
			//          Archivos
			//acceptedFiles: ".doc,.docx,.pdf,.txt",
			//maxFilesize: 500,
			maxFiles: 5,
		};
	</script>
	<script>
		Dropzone.options.myAwesomeDropzonee = {
			headers: {
				'X-CSRF-TOKEN': "{{ csrf_token() }}"
			},
			dictDefaultMessage: "Arrastre o toque para subir su archivo",

			//          Archivos
			acceptedFiles: ".doc,.docx,.pdf,.txt",
			maxFilesize: 500,
		};
	</script>
	<script>
		ClassicEditor
			.create(document.querySelector('#desc'))
			.catch(error => {
				console.error(error);
			});
	</script>
	@yield('js_text_page')
</body>

</html>