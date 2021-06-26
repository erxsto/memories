@extends('layouts.app')
@section('content')


				<div class="container">
                  <!-- Content here -->
                  <br><br> <center> <h2>Registro</h2><br><br>    </center>
                <hr>
				<form action="{{ route('guardar_registro')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<!--NOMBRE-->
					Nombre*:
					<br>
					<input type="text" placeholder="Nombre" name="nombre" id="nombre" class="nombre" required="">
					<td></td>
					<br>

					Apellido Paterno*:
					<br>
					<input type="text" placeholder="Apellido Paterno" name="primer_apellido" id="primer_apellido" class="primer_apellido" required="">
					<td></td>
					<br>


					Apellido Materno*:
					<br>
					<input type="text" placeholder="Apellido Materno" name="segundo_apellido" id="segundo_apellido" class="segundo_apellido" required="">
					<td></td>
					<br><br>


					<!--CORREO-->
					Correo*:
					<br>
					<input type="text" placeholder="Correo" name="correo" id="correo" class="correo" required="">
					<td><span id="smail" class="smail"></span></td>
					<br><br>
					<!--Contraseña-->
					Contraseña*:
					<br>
					<input type="password" placeholder="Password" id="password" name="contrasena" onkeyup="validar2(this);" required="">

					<br><br>

					Telefono*:
					<br>
					<input type="text" placeholder="Telefono" name="telefono" required="">
					<!--Direción-->
					<br><br>

					<input type="submit" value="Submit">

				</form>
                </div>
			

@endsection