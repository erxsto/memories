
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: black;" class="card-header"></div>

                <div style="color: black;" class="card-body">
                    @if (session('status'))
                        <div style="color: black;" class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="./plans" style="color: black;"> Hola, {{ Auth::user()->name }} estás logueado!</a>
                    {{ session('session_tipo') }}

                </div>
                
                
               
                <div class="p-3 mb-2 bg-dark text-white">Comienza Agregando Tus Herederos ({{ Auth::user()->num_h }} Disponibles)
                    
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Agregar</a>

                </div>
               


            </div>
        </div>
    </div>
</div>
@endsection
