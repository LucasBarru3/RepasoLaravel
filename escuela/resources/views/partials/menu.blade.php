<nav id="primary_nav_wrap">

    <ul class="lista">

        <li class="current-menu-item"><a href="{{route('inicio')}}">Index</a></li>

        <li><a href="#"><b>Alumnos</b></a>

            <ul id="submenu">

                <li><a href="{{route('alumnos.index')}}">Listado de alumnos</a></li>

                <li><a href="{{route('alumnos.create')}}">Nuevo alumno</a></li>

            </ul>

        </li>

        <li><a href="#"><b>Cursos</b></a>

            <ul id="submenu">

                <li><a href="{{route('cursos.index')}}">Cursos</a></li>

                <li><a href="">Nuevo curso</a></li>

            </ul>

        </li>

        <li><a href="#"><b>Profesores</b></a>

            <ul id="submenu">

                <li><a href="">Profesores</a></li>

                <li><a href="">Nuevo profesor</a></li>

            </ul>

        </li>

        @auth
            <span>{{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth

    </ul>

<hr><br>

</nav>

<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #f1f1f1;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #ddd;
    }

    li a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>