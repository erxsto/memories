@extends('layouts.app')
@section('content')


				<div class="container">
                  <!-- Content here -->
				<center>	<h4>Mis Herederos</h4>
				</center>
					<br>
					<table class="table table-hover table-dark">
						<tbody>

							<tr style="border: gray 2px solid;">
								<td>Nombre</td>
								<td>Primer Apellido</td>
								<td>Segundo Apellido</td>
								<td>Correo</td>
								<td> <br> </td>
							</tr>
						
						@foreach($h as $hro)

							<tr>
								<td>{{$hro->nombre}}</td>
								<td>{{$hro->app}}</td>
								<td>{{$hro->apm}}</td>
								<td>{{$hro->correo}}</td>
								<td> 
								
                            		<form action="{{ route('eliminar_h', $hro) }}" class="d-inline formulario-eliminar" method="post">
                            		    
                            		    @csrf
                            		    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            		</form>
								
								</td>
							</tr>
						@endforeach

						</tbody>
					</table>	
                </div>
				<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('eliminar') == 'ok')
<script>
	Swal.fire(
		'Eliminado!',
		'El Heredero se eliminó con éxito.',
		'success')
</script>
@endif
<script>
	$('.formulario-eliminar').submit(function(e) {
		e.preventDefault();
		Swal.fire({
			title: '¿Estás seguro?',
			text: "¡Este Heredero se eliminará definitivamente!",
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