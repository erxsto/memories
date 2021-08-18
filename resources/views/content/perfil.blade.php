@extends('layouts.app')
@section('content')
<div class="container">
	<center>
		PERFIL - CUENTA <text style="text-transform:uppercase;">{{auth()->user()->tip_usu}}</text>
		<br><br><br>
		@foreach($usr as $us)
		<form action="{{ url('actimg/') }}" id="avatarForm" enctype="multipart/form-data">
			@csrf
			<input type="file" style="display: none" id="avatarInput">
		</form>
		<img src="{{ asset('images/Usuarios/'.$us->imagen) }}" style="width:200px; height:200px; border-radius:120px;" class="img-radius" alt="no-image" id="avatarImage" name="avatarImage">
		<br><br>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>¡Puedes hacer click en tu foto de perfil para cambiarla!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		Nombre: <h5 class="f-w-600"> {{ $us->name }} {{ $us->app }} {{ $us->apm }}</h5>
		<br>Correo electrónico: <h5 class="f-w-600">{{ $us->email }} <br>
			<br>Fecha de nacimiento: <h5 class="f-w-600">{{ $us->fn }} <br>
				<br>Telefono: <h5 class="f-w-600">{{ $us->telefono }} <br>

					<br><br>
					<a class="alert alert-primary" href=" {{ route('editar_usr', ['id' => $us->id]) }}">Editar Datos</a></td>
	</center>
	@endforeach
</div>

<script type="text/javascript">
	var $avatarInput, $avatarImage, $avatarForm;
	var avatarUrl;
	$(function() {

		$avatarInput = $('#avatarInput');
		$avatarImage = $('#avatarImage');
		$avatarForm = $('#avatarForm');

		$avatarImage.on('click', function() {

			$avatarInput.click();

		});

		avatarUrl = $avatarForm.attr('action');

		$avatarInput.on('change', function() {

			//ajax
			var formData = new FormData();
			formData.append('imagen', $avatarInput[0].files[0]);

			$.ajax({
					url: avatarUrl + '?' + $avatarForm.serialize(),
					method: 'POST',
					data: formData,
					processData: false,
					contentType: false

				})
				.done(function(data) {

					if (data.success)
						// console.log(data.path);
						$avatarImage.attr('src', './images/Usuarios/' + data.filename);
				})
				.fail(function() {

					alert('La imagen subida no tiene formato correcto');
				})
		});



	})
</script>
@endsection