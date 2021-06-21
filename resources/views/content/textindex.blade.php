@extends('layouts.app')
@section('textindex')
<section id="main" class="wrapper style2">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($texts as $text)
                    <tr>
                        <td>{{ $text['id']}}</td>
                        <td>{{ $text['titulo']}}</td>
                        <td>{{ $text['desc']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="title">Mis recuerdos:</div>
</section>
<!--<section id="highlights" class="wrapper style3">
		<div class="title">Mis recuerdos:</div>
		<div class="container">
		</div>
	</section>-->
@endsection