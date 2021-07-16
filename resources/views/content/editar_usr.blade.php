
@extends('layouts.app')
@section('content')

	<form name="editar_usr" action="{{ route('salvar', ['id' => $user->id]) }}" method="POST">
	
	<div class="card-body">
                        @csrf
				        {{ method_field('PUT')}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        
                        <br> <br>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>
                        <div class="form-group row">
                            <label for="app" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Apellido paterno') }}</label>

                            <div class="col-md-6">
                                <input id="app" type="text" class="form-control @error('app') is-invalid @enderror" name="app" value="{{ $user->app }}" required autocomplete="app" autofocus>

                                @error('app')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="apm" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Apellido materno') }}</label>

                            <div class="col-md-6">
                                <input id="apm" type="text" class="form-control @error('apm') is-invalid @enderror" name="apm" value="{{ $user->apm }}" required autocomplete="apm" autofocus>

                                @error('apm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="fn" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fn" type="date" class="form-control @error('fn') is-invalid @enderror" name="fn" value="{{ $user->fn }}" required autocomplete="fn" autofocus>

                                @error('fn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $user->telefono }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        
                        <br> <br>
                        <div class="form-group row mb-0">
							
							<div class="col-md-6 offset-md-4">
								 
							</div>
							<div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('salvar') }}
                                </button>
                            </div>
                        </div>
                    </div>

	</form>		
@endsection