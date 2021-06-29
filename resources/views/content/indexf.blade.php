@extends('layouts.app')
@section('content')
<section id="main" class="wrapper style1">
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
		</div>
	</div>
	<div class="title">Mis recuerdos:</div>
</section>
<section id="highlights" class="wrapper style3">
	<div class="title">Mis recuerdos de: </div>
	<div class="text-center">
		<select name="heredero" id="heredero">
			<option value="">--Selecciona un Heredero--</option>

			@foreach($herederos as $heredero)
			<option value="{{$heredero->id_destinatario}}">{{$heredero->nombre}}</option>
			@endforeach
		</select>
		<div class="container">
			<div class="row">
				<table class="table table-bordered" id="res" width="100%" cellspacing="0">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nombre</th>
							<th scope="col">Recuerdo</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($herederos as $heredero)
						<tr>
							@foreach ($files as $file)
							@if($file->id_destinatario == $heredero->id_destinatario)
							<td>{{ $file['id_destinatario']}}</td>
							<td>{{ $heredero['nombre']}}</td>
							<td><img src="{{ asset($file->url) }}" class="img-thumbnail" alt="" width="236" height="236"></td>
							@endif
							@endforeach
						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
		</div>
	</div>
	<div class="container">

	</div>
</section>
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
<script>
	$(document).ready(function() {
				$("#heredero").change(function() {
					var heredero = $(this).val();
					$.ajax({
						url: "{{route('indexf')}}",
						type: "POST",
						data: {
							heredero: heredero
						},
						success: function(data) {
							$('#res').html(data);
						}
					});
				});;
			}
</script>
@endsection