<nav>
    <a href="{{route('index')}}">Inicio</a>
    <a href="{{route('movies.index')}}">Peliculas</a>
    <a href="{{route('directors.index')}}">Directores</a>

    @auth
        <a href="{{ route('logout')}}">Cerrar sesión</a>
    @else
        <a href="{{ route('signup')}}">Registrarme</a>
        <a href="{{ route('login')}}">Iniciar sesión</a>
    @endauth
</nav>
