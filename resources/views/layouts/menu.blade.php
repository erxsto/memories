<nav id="nav">
    <ul>
        <li class="current"><a href="{{route('index')}}">Home</a></li>
        <li>
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
        <li><a href="{{route('apartado4')}}">apartado4</a></li>
        <li><a href="{{route('planes')}}">Planes</a></li>
        <li>

            <a href="#">Recuerdos</a>
            <ul>
                <li><a href="{{route('indexf')}}">Mis recuerdos</a></li>
                <li><a href="{{route('createf')}}">Subir recuerdos</a></li>
            </ul>
        </li>

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
        @endif
    </ul>
    </ul>


</nav>