<nav>
    <a href="{{route('libros.index')}}">Libros</a>
    <a href="{{route('libros.create')}}">Nuevo Libro</a>
    <a href="{{route('autores.index')}}">Autores</a>
    <a href="{{route('autores.create')}}">Nuevo Autor</a>
    <a href="{{route('opiniones.index')}}">Opiniones</a>   
    <span>{{ auth()->user()->name }}</span> 
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
    @else
    <a href="{{ route('login') }}">Iniciar sesión</a>
    @endauth
</nav>