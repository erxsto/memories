@extends('layouts.index')
@section('appblade')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a style="color: black;" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li><a style="color: black;" href="{{ url('/plans') }}">Planes</a></li>
           
        
           
            @if(isset(Auth::user()->name))
            @if(Auth::user()->tip_usu == 'Basico')
            <li><a style="color: black;" href="{{ url('/basicAcc') }}">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de tu suscripción | Plan Básico |
            </a></li>

            @elseif(Auth::user()->tip_usu == 'Premium')
            <li><a style="color: black;" href="{{ url('/PremiumAcc') }}">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfruta de tu suscripción | Premium | 
            </a></li>
            
            @else
            <li><a style="color: black;" href="{{ url('/freeAcc') }}">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Free account (Suscribete para obtener grandes beneficios!.)
            </a></li>
            
            
            @endif
            @else
            @endif

        </ul>

        <!-- Right Side Of Navbar -->
   
   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: black;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div style="color: black;" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="color: black;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('braintree')
</body>
</html>
@endsection