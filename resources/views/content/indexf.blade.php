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
						 <!--EDITAR <button href="{{ route('editf', $file) }}" class="btn btn-info">Editar</button>-->
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
</section
<section id="highlights" class="wrapper style1">
	<div class="text-center">
		<select name="heredero" id="heredero">
			<option value="">--Selecciona un Heredero--</option>

			@foreach($herederos as $heredero)
			<option value="{{$heredero->id_destinatario}}">{{$heredero->nombre}}</option>
			@endforeach
		</select>
		<div id="recuerdo_h">
			<br><br><br><br><br><br>
		</div>
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
	$(function() {

		$('#heredero').on('change', cambiodeh);

	});


	function cambiodeh() {

		var h_id = $(this).val();

		//ajax

		$.get('/memories/public/api/indexf/' + h_id + '/recuerdos', function(data) {
			var html_div = '<br><br><div class="container"><div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">';
			for (var i = 0; i < data.length; i++) {
				var nombre = '' + data[0].nombre + ' ' + data[0].app + ' ' + data[0].apm + '';
				html_div += '<div class="col"><div class="p-3 border bg-light"><img src="http://127.0.0.1/memories/public/' + data[i].url + '" alt="http://127.0.0.1/memories/public/' + data[i].url + '" class="img-thumbnail" alt="" width="236" height="236"></div></div><br>';
				$('#recuerdo_h').html(html_div);
			}
			html_div += '</div></div><br><br><div class="alert alert-info" role="alert"> Recuerdos de ' + nombre + '</div><br><br>';
			$('#recuerdo_h').html(html_div);

		});




	}
</script>
@endsection