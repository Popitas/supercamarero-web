<!doctype html>
<html lang="es">
<head>
    @include('includes.head')
    @yield('css')

</head>
<body>
    @include('includes.returnbar')

    @yield('content')

    @include('includes.scripts')

</body>
</html>
