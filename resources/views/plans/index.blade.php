@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="panel panel-default ">
                <div class="panel-heading ">Seleccione el Plan</div>
<div class="panel-body">
                    <ul class="list-group ">
                        @foreach ($plans as $plan)
                            <li class="list-group-item clearfix ">
                                <div class="pull-left ">
                                    <h4 style="color: red;"class="">{{ $plan->name }}</h4>
                                    <h4 style="color: green;"class="">${{ number_format($plan->cost, 2) }} mensual</h4>
                                    @if ($plan->description)
                                        <p style="color:black;"class="">{{ $plan->description }}</p>
                                    @endif
                                </div>
<a href="{{ url('/plan', $plan->slug) }}" style="color: black; font-weight: bolder;"class="btn btn-default pull-right ">Escoger este Plan</a>
</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection