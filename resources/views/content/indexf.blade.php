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
			<div class="container">
				<header class="style1">
					<h2>Ipsum sapien elementum portitor?</h2>
					<p>
						Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
						Nam pharetra laoreet imperdiet volutpat etiam feugiat.
					</p>
				</header>
				<div class="row">
					<div class="col-6 col-12-medium">

						<!-- Contact Form -->
						<section>
							<form method="post" action="#">
								<div class="row gtr-50">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="contact-name" placeholder="Name" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" id="contact-email" placeholder="Email" />
									</div>
									<div class="col-12">
										<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" class="style1" value="Send" /></li>
											<li><input type="reset" class="style2" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

					</div>
					<div class="col-6 col-12-medium">

						<!-- Contact -->
						<section class="feature-list small">
							<div class="row">
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-home">Mailing Address</h3>
										<p>
											Untitled Corp<br />
											1234 Somewhere Rd<br />
											Nashville, TN 00000
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-comment">Social</h3>
										<p>
											<a href="#">@untitled-corp</a><br />
											<a href="#">linkedin.com/untitled</a><br />
											<a href="#">facebook.com/untitled</a>
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-envelope">Email</h3>
										<p>
											<a href="#">info@untitled.tld</a>
										</p>
									</section>
								</div>
								<div class="col-6 col-12-small">
									<section>
										<h3 class="icon solid fa-phone">Phone</h3>
										<p>
											(000) 555-0000
										</p>
									</section>
								</div>
							</div>
						</section>

					</div>
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; memories.</li>
						<li>Diseñador: <a href="./info">Erasto - Fabian</a></li>
					</ul>
				</div>
			</div>
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