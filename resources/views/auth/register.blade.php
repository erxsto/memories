@extends('layouts.app')
@section('content')
<head>
	<title>MEMORIES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="assets/css/app.css" rel="stylesheet">
</head>

<style>
	.amarillo {
		filter: hue-rotate(60deg) brightness(100%);
	}

	.ok {
		filter: hue-rotate(900deg) saturate(30%);
	}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="app" class="col-md-4 col-form-label text-md-right">{{ __('app') }}</label>

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
                            <label for="apm" class="col-md-4 col-form-label text-md-right">{{ __('apm') }}</label>

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
                            <label for="fn" class="col-md-4 col-form-label text-md-right">{{ __('fn') }}</label>

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
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br> <br>

                        <div class="form-group row">
                            <label for="imagen" class="col-md-4 col-form-label tet-md-right">{{ __('imagen') }}</label>

                            <div class="col-md-6">
                                <input id="imagen" type="text" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" required autocomplete="imagen" autofocus>

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
                                    {{ __('Register') }}
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