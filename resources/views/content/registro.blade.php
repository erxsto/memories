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
		<link rel="icon" href="{{ asset('/favicon.ico') }}">
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
					<div id="logo">
							<h1><a href="{{route('login')}}">MEMORIES</a></h1>
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
				<hr>
				<form action="{{ route('register')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!--NOMBRE-->
					<br>
					<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
					<br>
					<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrase??a') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contrase??a') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
						<br>

                        <div class="form-group row">
                            <label for="app" class="col-md-4 col-form-label text-md-right">{{ __('Primer apellido') }}</label>

                            <div class="col-md-6">
                                <input id="app" type="text" class="form-control @error('app') is-invalid @enderror" name="app" value="{{ old('app') }}" required autocomplete="app" autofocus>

                                @error('app')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>

                        <div class="form-group row">
                            <label for="apm" class="col-md-4 col-form-label text-md-right">{{ __('Segundo apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apm" type="text" class="form-control @error('apm') is-invalid @enderror" name="apm" value="{{ old('apm') }}" required autocomplete="apm" autofocus>

                                @error('apm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>

                        <div class="form-group row">
                            <label for="fn" class="col-md-4 col-form-label text-md-right">{{ __('fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fn" type="date" class="form-control @error('fn') is-invalid @enderror" name="fn" value="{{ old('fn') }}" required autocomplete="fn" autofocus>

                                @error('fn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>
                        
                        <div class="form-group row">
                            <label for="imagen" class="col-md-4 col-form-label tet-md-right">{{ __('imagen') }}</label>

                            <div class="col-md-6">
                                <input id="imagen" type="text" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" required autocomplete="imagen" autofocus>

                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<br>
					
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Listo') }}
                                </button>
                            </div>
                        </div>				
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
								<li>&copy; memories.</li><li>Dise??ador: <a href="./info">Erasto - Fabian</a></li>
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
			strengthButtonText: 'Mostrar contrase??a',
			strengthButtonTextToggle: 'Ocultar contrase??a' });
			
			});

			$("#correo").blur(function() {
                var txtmail = $("#correo").val();

                var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if (valmail.test(txtmail)) {
                    $("#smail").text("valido");
					$("#correo").css({"border": "1px solid #0c0"}).fadeIn(2000);
                } else {
                    $("#smail").text("Incorrecto");
					$("#correo").css({"border": "1px solid #f00"}).fadeIn(2000);
                }
            });

			
			const $input1 = document.querySelector("#nombre");
            const patron1 = /[a-zA-Z]+/;

            $input1.addEventListener("keydown", event=>{
                console.log(event.key);
                
                if(patron1.test(event.key)){
                
                        $('#nombre').css({ "border":"1px solid #0C0"});
                        
                }
                else{
                    
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault(); }
                }


            });

			const $input2 = document.querySelector("#app");
            const patron2 = /[a-zA-Z??]+/;

            $input2.addEventListener("keydown", event=>{
                console.log(event.key);
                
                if(patron2.test(event.key)){
                
                        $('#app').css({ "border":"1px solid #0C0"});
                        
                }
                else{
                    
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault(); }
                }


            });
			
			const $input3 = document.querySelector("#apm");
            const patron3 = /[a-zA-Z??]+/;

            $input3.addEventListener("keydown", event=>{
                console.log(event.key);
                
                if(patron3.test(event.key)){
                
                        $('#apm').css({ "border":"1px solid #0C0"});
                        
                }
                else{
                    
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault(); }
                }


            });

			const $input4 = document.querySelector("#telefono");
            const patron4 = /[0-9-+]+/;

            $input4.addEventListener("keydown", event=>{
                console.log(event.key);
                
                if(patron4.test(event.key)){
                
                        $('#telefono').css({ "border":"1px solid #0C0"});
                        
                }
                else{
                    
                    if(event.keyCode==8 ){ console.log("backspace"); }
                    else{ event.preventDefault(); }
                }

			});



			</script>

	<script type="text/javascript" >
	function comprobarClave(){
		
	    clave1 = document.getElementById("myPassword").value;
	    clave2 = document.getElementById("myPassword2").value;

	    if (clave1 == clave2)
		document.getElementById("myPassword").style.cssText = ("border: solid 1px #0c0"),
		document.getElementById("myPassword2").style.cssText = ("border: solid 1px #0c0"),
		document.getElementById("conf").innerHTML = ("Las contrase??as son iguales.");
	    else
		document.getElementById("myPassword").style.cssText = ("border: solid 1px #0c0"),
		document.getElementById("myPassword2").style.cssText = ("border: solid 1px #f00"),
		document.getElementById("conf").innerHTML = ("Las contrase??as no coinciden.");
	}
	</script>
	</body>
</html>