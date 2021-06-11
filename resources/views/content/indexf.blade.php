<!DOCTYPE HTML>
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
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="assets/css/app.css" rel="stylesheet">
	<link rel="icon" href="{{ asset('/favicon.ico') }}">
</head>

<style>
	.amarillo {
		filter: hue-rotate(60deg) brightness(100%);
	}

	.ok {
		filter: hue-rotate(900deg) saturate(30%);
	}
</style>

<body class="left-sidebar is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header" class="wrapper">

			<!-- Logo -->
			<div id="logo">
				<h1><a href="index.html">MEMORIES</a></h1>
				<p>Los recuerdos lo son todo</p>
			</div>

			<!-- Nav -->
			@include('layouts.menu')

		</section>

		<!-- Main -->

		<!-- Highlights -->

		<!-- Footer -->
		<section id="main" class="wrapper style2">
			<div class="container">
				<div class="row">
					@foreach($files as $file)
					<div class="col-4">
						<div class="card">
							<img src="{{ asset($file->url) }}" alt="" class="img-fluid">
							<div class="card-footer">
								<!-- EDITAR <button href="{{ route('editf', $file) }}" class="btn btn-info">Editar</button> -->
								<form action="{{ route('destroyf', $file) }}" class="d-inline formulario-eliminar" method="POST">
									@method('DELETE')
									@csrf
									<button type="submit" class="btn btn-info">Eliminar</button>
								</form>
							</div>
						</div>
					</div>
					@endforeach
					<div class="col-12">
						{{$files->links()}}
					</div>
				</div>
			</div>
			<div class="title">Mis recuerdos:</div>
			<!--<div class="container">
				<header class="style1">
					<h2>Ipsum sapien elementum portitor?</h2>
					<p>
						Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
						Nam pharetra laoreet imperdiet volutpat etiam feugiat.
					</p>
				</header>
			</div>-->
		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@if (session('eliminar') == 'ok')
	<script>
		Swal.fire(
			'Eliminado!',
			'El recuerdo se eliminó con éxito.',
			'success')
	</script>
	@endif
	<script>
		$('.formulario-eliminar').submit(function(e) {
			e.preventDefault();
			Swal.fire({
				title: '¿Estás seguro?',
				text: "¡Este recuerdo se eliminará definitivamente!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Si, ¡eliminar!',
				cancelButtonText: 'Cancelar'
			}).then((result) => {
				if (result.isConfirmed) {
					/*Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)*/
					this.submit();
				}
			})
		});
	</script>

</body>

</html>