<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
        <!--<li>
            <a href="#">Apartado1</a>
            <ul>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Magna veroeros</a></li>
                <li><a href="#">Etiam nisl</a></li>
                <li>
                    <a href="#">Sed consequat</a>
                    <ul>
                        <li><a href="#">Lorem dolor</a></li>
                        <li><a href="#">Amet consequat</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam nisl</a></li>
                        <li><a href="#">Sed feugiat</a></li>
                    </ul>
                </li>
                <li><a href="#">Nisl tempus</a></li>
            </ul>
        </li>
        <li><a href="{{route('apartado2')}}">apartado2</a></li>
        <li><a href="{{route('apartado3')}}">apartado3</a></li>
        <li><a href="{{route('apartado4')}}">apartado4</a></li>-->
        <li class="nav-item"><a class="nav-link" href="{{ url('/plans') }}">Planes</a></li>
        
        <li class="nav-item dropdown">

        
            <a id="navbarDropdown"class="nav-link dropdown-toggle"href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recuerdos</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <ul>
            <a class="dropdown-item" href="{{route('indexf')}}">Mis recuerdos</a>
            <a class="dropdown-item" href="{{route('createf')}}">Subir recuerdos</a>
            </ul>
        </li>
        
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

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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

    
        <!--           
        @if(session('session_tipo')=='free')
        <li>
            {{session('session_name')}}
            <ul>
                <li><a href="{{ URL::action('LoginController@perfil') }}">Perfil</a></li>
                <li><a href="{{ URL::action('LoginController@logout') }}">Cerrar Sesión</a></li>
            </ul>
        </li>


        @else

        @if(session('session_tipo')=='basico')

        <li>{{session('session_name')}}</li>
        <span class="arrow_carrot-down"></span>
        <ul>
            <li><a href="{{ URL::action('App\Http\Controllers\LoginController@administracion') }}">Perfil</a></li>
            <li><a href="{{ URL::action('App\Http\Controllers\LoginController@logout') }}">Cerrar Sesión</a></li>
        </ul>

        @else
        <meta http-equiv="Refresh" content="URL={{route('index')}} ">

        <LI> <a href="./login"><i class="fa fa-user"></i> Login</a></LI>
        @endif
        @endif-->
    </ul>
</nav>