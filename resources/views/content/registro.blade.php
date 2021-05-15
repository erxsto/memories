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
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="strength.js"></script>
		<script type="text/javascript" src="js.js"></script>
	</head>
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
				<section id="main" class="wrapper style2">
					<div class="title">Left Sidebar</div>
					<div class="container">
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

							
									

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										
											
											
											
										</article>
										<div class="row gtr-150">
											
											<div class="c0ol-6 col-12-small">
										
												<section class="box">
												<header class="style1">
												<br>
												<h2>REGISTRO</h2>
											
											</header>									
				<h4>Los campos marcados con " * " son obligatiorios.</h4>
				<hr>
				<form action="{{ route('guardar_registro')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!--NOMBRE-->
					Nombre*:
					<br>
					<input type="text" placeholder="" name="nombre" id="nombre" class="nombre" required="">
					<td></td>
					<br>

					Apellido Paterno*:
					<br>
					<input type="text" placeholder="" name="primer_apellido" id="primer_apellido" class="primer_apellido" required="">
					<td></td>
					<br>


					Apellido Materno*:
					<br>
					<input type="text" placeholder="" name="segundo_apellido" id="segundo_apellido" class="segundo_apellido" required="">
					<td></td>
					<br><br>


					<!--CORREO-->
					Correo*:
					<br>
					<input type="text" placeholder="" name="correo" id="correo" class="correo" required="">
					<td><span id="smail" class="smail"></span></td>
					<br><br>
					<!--Contraseña-->
					Contraseña*:
					<br>
					<input type="password" placeholder="" id="myPassword" name="contrasena"  required="">
					
					<br><br>

					Confirmar contraseña*:
					<br>
					<input type="password" placeholder="" id="myPassword" name="contrasena" onchange="comprobarClave()"  required="">
					<span class="conf" name="conf" id="conf"></span>
					<br><br>

					Fecha de Nacimiento*:
					<br>
					<input type="text" placeholder="00/00/0000" name="telefono" required="">


					Telefono*:
					<br>
					<input type="text" placeholder="" name="telefono" required="">
					

					<br>

					<input type="hidden" value="free" name="tip_usu">
					Imagen:
					<br>
					<input type="text" name="img" id="img" class="img">
					<br>
					
					<a href="#" class="button style1">More</a>
					
					</form>
												</section>
											</div>
										</div>
									</div>

							</div>
						</div>
					</div>
				</section>

			<!-- Highlights -->
				<section id="highlights" class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer" class="wrapper">
					<div class="title">The Rest Of It</div>
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
								<li>&copy; memories.</li><li>Diseñador: <a href="./info">Erasto - Fabian</a></li>
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

			<script src="assets/js/strength.min.js"></script>
			<script id="rendered-js">
			$(document).ready(function ($) {
			$('#myPassword').strength({
			strengthClass: 'strength',
			strengthMeterClass: 'strength_meter',
			strengthButtonClass: 'button_strength',
			strengthButtonText: 'Mostrar contraseña',
			strengthButtonTextToggle: 'Ocultar contraseña' });
			});
			</script>

	<script type="text/javascript" >
	function comprobarClave(){
	    clave1 = document.contrasena.value
	    clave2 = document.contrasena2.value

	    if (clave1 == clave2)
	       alert("Las contraseñas son iguales.")
	    else
	       alert("Las contraseñas no coinciden.")
	}
	</script>
	</body>
</html>