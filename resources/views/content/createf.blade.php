@extends('layouts.app')
@section('createf')
        <section id="main" class="wrapper style2">
            <div class="title">Carga de recuerdos</div>
            <div class="container">
                <header class="style1">
                    <h2>Aquí puedes subir tus recuerdos!</h2>
                    <p>
                    <div class="container">
                        <div class="col">
                            <h1>Subir recuerdo</h1>
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
                            </form>
                        </div>
                    </div>
                    </p>
                </header>
            </div>
        </section>
        
@endsection