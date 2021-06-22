@extends('layouts.app')
@section('content')
<h1>Aquí podrás escribir todo lo que tienes dentro de tu corazón!</h1>
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título..." value="{{ old('titulo') }}">
    </div>
    <div class="form-group">
        <label for="desc">Inserta el texto!</label>
        <textarea name="desc" id="desc">{{ old('desc') }}</textarea>
    </div>
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>
@endsection