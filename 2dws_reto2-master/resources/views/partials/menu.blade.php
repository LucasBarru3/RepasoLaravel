<nav id="primary_nav_wrap">
    <ul>
        <li class="current-menu-item"><a href="{{route('alumnos.index')}}">Index</a></li>
        <li><a href="#">Ikasleak</a>
            <ul id="submenu">
                <li><a href="{{route('alumnos.index')}}">Ikasle zerrenda</a></li>
                <li><a href="{{route('alumnos.create')}}">Ikasle berria</a></li>
            </ul>
        </li>
        <li><a href="#">Ikastaroak</a>
            <ul id="submenu">
                <li><a href="{{route('cursos.index')}}">Ikastaroak</a></li>
                <li><a href="{{route('cursos.create')}}">Ikastaro berria</a></li>
            </ul>
        </li>
        <li><a href="#">Irakasleak</a>
            <ul id="submenu">
                <li><a href="{{route('profesores.index')}}">Irakasleak</a></li>
                <li><a href="{{route('profesores.create')}}">Irakasle berria</a></li>
            </ul>
        </li>

    </ul>
</nav>




