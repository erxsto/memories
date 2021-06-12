<nav id="nav">
    <ul>
        <li class="current"><a href="{{route('home')}}">Home</a></li>
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
        <li><a href="{{ url('/plans') }}">Planes</a></li>
        <li>

            <a href="#">Recuerdos</a>
            <ul>
                <li><a href="{{route('indexf')}}">Mis recuerdos</a></li>
                <li><a href="{{route('createf')}}">Subir recuerdos</a></li>
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

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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