<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    </head>

<body>

    @include('partials.menu')
    <section  class="content">
        @yield('content')
    </section>


    @include('partials.footer')
</body>
</html>
