
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: black;" class="card-header">Dashboard</div>

                <div style="color: black;" class="card-body">
                    @if (session('status'))
                        <div style="color: black;" class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="./plans" style="color: black;"> You are logged in!</a>
                    {{ session('session_tipo') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
