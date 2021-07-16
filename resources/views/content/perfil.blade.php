
@extends('layouts.app')
@section('content')
			<div class="container">
				<center>
					PERFIL - CUENTA <text class="transformacion2 free">{{auth()->user()->tip_usu}}</text>
					<br><br><br>
					@foreach($usr as $us)
					<form action="{{ url('actimg/') }}" id="avatarForm">
						@csrf
						<input type="file" style="display: none" id="avatarInput">
					</form>
					<img src="{{ asset('images/Usuarios/'.$us->imagen) }}" width="18%" class="img-radius" alt="User-Profile-Image" id="avatarImage">
					<br><br>
					Nombre: <h5 class="f-w-600"> {{ $us->name }} {{ $us->app }} {{ $us->apm }}</h5>
				</center>
				<a href=" {{ route('editar_usr', ['id' => $us->id]) }}">Editar</a></td>
				@endforeach
			</div>

<script type="text/javascript">

	var $avatarInput, $avatarImage, $avatarForm;
	var avatarUrl;
	$(function (){

		$avatarInput = $('#avatarInput');
		$avatarImage = $('#avatarImage');
		$avatarForm = $('#avatarForm');

		$avatarImage.on('click', function(){

				$avatarInput.click();

		});

		avatarUrl = $avatarForm.attr('action');

		$avatarInput.on('change', function(){
			
			//ajax
			var formData = new FormData();
			formData.append('imagen', $avatarInput[0].files[0]);

			$.ajax({
				url: avatarUrl+'?'+$avatarForm.serialize(),
				method: 'POST',
				data: formData,
				processData: false,
				contentType: false

			})
			.done(function(data){
					
					if(data.success) 
					// console.log(data.path);
					$avatarImage.attr('src','./images/Usuarios/'+data.filename);
			})
			.fail(function(){

					alert('La imagen subida no tiene formato correcto');
			})
		});



	})
</script>
@endsection