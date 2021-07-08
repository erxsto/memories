@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="app" type="text" class="form-control @error('app') is-invalid @enderror" name="app" value="{{ old('app') }}" required autocomplete="app" autofocus>

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
                                <input id="apm" type="text" class="form-control @error('apm') is-invalid @enderror" name="apm" value="{{ old('apm') }}" required autocomplete="apm" autofocus>

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
                                <input id="fn" type="date" class="form-control @error('fn') is-invalid @enderror" name="fn" value="{{ old('fn') }}" required autocomplete="fn" autofocus>

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
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row">
                            <label for="imagen" class="col-md-4 col-form-label text-md-right"><br><br>{{ __('Imagen') }}</label>
                            <div class="col-md-6">
                                <input type="file" id="imagen" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}">
                                @error('imagen')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Regístrate') }}
                                </button>
                            </div>
                        </div>
                        <br> <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection