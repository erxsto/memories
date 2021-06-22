@extends('layouts.app')
@section('content')
<section id="main" class="wrapper style2">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título del recuerdo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($texts as $text)
                    <tr>
                        <td>{{ $text['id']}}</td>
                        <td>{{ $text['titulo']}}</td>
                        <td>{!! $text['desc']!!}</td>
                        <td>
                            <a href="{{ route('texteditar', [$text->id]) }}"><i class="fa fa-edit"></i></a>
                        </td>
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