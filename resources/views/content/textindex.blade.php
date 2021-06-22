@extends('layouts.app')
@section('content')
<section id="main" class="wrapper style2">
    <div class="container">
        <div class="row">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título del recuerdo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($texts as $text)
                    <tr>
                        <td>{{ $text['id']}}</td>
                        <td>{{ $text['titulo']}}</td>
                        <td>{!! $text['desc']!!}</td>
                        <td>
                            <a href="{{ route('texteditar', [$text->id]) }}"><i class="btn btn-info">Editar</i></a>
                            <form action="{{ route('destroy', $text) }}" class="d-inline formulario-eliminar" method="POST">
									@method('DELETE')
									@csrf
									<button type="submit" class="fas fa-trash-alt">Eliminar</button>
								</form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
    @endsection