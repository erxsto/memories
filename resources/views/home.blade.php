
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
                
                
                @if((Auth::user()->num_h) > 1)
               
                <div class="p-3 mb-2 bg-dark text-white">Comienza Agregando Tus Herederos ({{ Auth::user()->num_h }} Disponibles)
                
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="./registro_h" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Agregar</a>
                @else

                <div class="p-3 mb-2 bg-dark text-white">Ups!, No te quedan Herederos para agregar ({{ Auth::user()->num_h }} Disponibles)
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="./editar_h" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Gestionar Herederos</a>
                
                </div>    
                @endif
                </div>


               


            </div>
        </div>
    </div>
</div>
@endsection
