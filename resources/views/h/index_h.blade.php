@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: black;" class="card-header"></div>
                <center>
                    <h4>Bienvenido</h4>
                    <h5 style="text-transform: capitalize;"> {{ session('session_name') }}</h5>

                    @foreach($herederos as $f)
                    <div class="col">
                        <div class="p-3 border bg-light">
                            <div class="content">
                                {{$f->id}}
                                <img src="{{ asset($f->url) }}" alt="{{ asset($f->url) }}" class="img-thumbnail" alt="" width="236" height="236">
                                <br>
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('downloadfile', $f->id) }}" class="btn btn-primary"> Descargar </a>
                    </div>
                    @endforeach
                </center>
            </div>
        </div>
    </div>
</div>
@endsection