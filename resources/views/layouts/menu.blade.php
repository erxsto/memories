<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> <br></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav navbar-nav navbar-center" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">

            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
            @if(isset(Auth::user()->name) && (Auth::user()->tip_usu == 'Premium' || Auth::user()->tip_usu == 'VIP') )
            <li class="nav-item"><a class="nav-link" href="{{ url('/myplan') }}">Gestionar Mi plan</a></li>
            @elseif(isset(Auth::user()->name) && (Auth::user()->tip_usu == 'free'))
            <li class="nav-item"><a class="nav-link" href="{{ url('/plans') }}">Planes</a></li>


            @elseif(!isset(Auth::user()->name))

            <li class="nav-item"><a class="nav-link" href="{{ url('/plans') }}">Planes</a></li>


            @endif

            @if(isset(Auth::user()->name))
            <li class="nav-item dropdown">


                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recuerdos</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <ul>
                        <a class="dropdown-item" href="{{route('indexf')}}">Mis recuerdos</a>
                        <a class="dropdown-item" href="{{route('createf')}}">Subir recuerdos</a>
                        <a class="dropdown-item" href="{{ url('/video') }}">Subir videos</a>
                        <a class="dropdown-item" href="{{route('textindex')}}">Mis recuerdos-texto</a>
                        <a class="dropdown-item" href="{{route('textcreates')}}">Subir recuerdos-texto</a>
                    </ul>
            </li>
            @else
            @endif
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user">{{ __('Login') }}</i></a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else





            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        <button type="submit">Salir</button>
                    </form>
                </div>
            </li>
            @endguest


            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    </div>
    </ul>
</nav>