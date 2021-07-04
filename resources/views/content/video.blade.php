@extends('layouts.app')
@section('content')
<h1>
    <center>Hora de subir un video para esa persona especial.</center>
</h1><br><br>
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ url('video') }}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Título..." value="{{ old('title') }}">
    </div><br>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" cols="10" rows="5" placeholder="Descripción..." value="{{ old('description') }}"></textarea>
    </div><br>
    <div class="form-group">
        <input class="form-control form-control-sm" type="file" name="video" />
    </div><br><br>
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Subir">
    </div>
    {{ csrf_field() }}
</form>

@endsection