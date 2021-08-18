@extends('layouts.app')
@section('content')
        <section id="main" class="wrapper style2">
            <div class="title">Carga de recuerdos</div>
            <div class="container">
                <header class="style1">
                    <h2>Aquí puedes subir tus recuerdos!</h2>
                    <p>
                    @if((Auth::user()->num_i) > 0)
                    <div class="container">
                        <div class="col">
                            <h1>Subir recuerdos en formato imagen.</h1>
                            <!--<div class="card">
                                    <div class="card-body">
                                        <form action="{{route('storef')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="file" name="file" id="" accept=".doc,.docx,.pdf,.txt">
                                                @error('file')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cargar</button>
                                        </form>
                                    </div>
                                </div>-->
                            <form action="{{route('storef')}}" method="POST" class="dropzone" id="my-awesome-dropzone">
                            
                            <div>
                                <select name="heredero" id="heredero">
                                    <option value="">--Selecciona un Heredero--</option>
                                    
                                    @foreach($herederos as $heredero)
                                    
                                    <option value="{{$heredero->id_destinatario}}">{{$heredero->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="./indexf">Ya no puedes agregar más Imagenes, Gestiona las que ya tienes para continuar...</a>
                    @endif
                    @if((Auth::user()->num_f) > 0)
                    <div class="container">
                        <div class="col">
                            <h1>Subir recuerdos en formato documento.</h1>
                            <form action="{{route('storeff')}}" method="POST" class="dropzone" id="my-awesome-dropzonee">
                            

                            <div>
                                <select name="heredero" id="heredero">
                                    <option value="">--Selecciona un Heredero--</option>
                                    
                                    @foreach($herederos as $heredero)
                                    
                                    <option value="{{$heredero->id_destinatario}}">{{$heredero->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                    @else
                    <br><br><br>
                    <a href="./indexf">Ya no puedes agregar más Archivos, Gestiona los que ya tienes para continuar...</a>
                    @endif
                    </p>
                </header>
            </div>
        </section>
        
@endsection