@extends('layouts.app')
@section('content')

			<div class="container">
				<h4> Inicio de Sesión - Herederos</h4>
				<form action="{{ route('validar_h')}}" method="get" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!--CORREO-->
					Correo*:
					<br>
					<input type="text" placeholder="Correo" name="correo" id="correo" class="correo" required="">
					<br><br>
					<!--Contraseña-->
					Contraseña*:
					<br>
					<input type="password" placeholder="Contraseña" id="contrasena" name="contrasena" onkeyup="validar2(this);" required="">

					<br><br>

					<input type="submit" value="Submit">

				</form>
            </div>
			

@endsection