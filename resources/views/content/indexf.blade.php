@extends('layouts.app')
@section('content')
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
		</div>
	</div>
	<div class="title">Mis recuerdos:</div>
</section>
<!--<section id="highlights" class="wrapper style3">
		<div class="title">Mis recuerdos:</div>
		<div class="container">
		</div>
	</section>-->
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
@endsection