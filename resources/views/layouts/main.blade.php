<!doctype html>
<html lang="es">
<head>
    @include('includes.head')

</head>
<body>
    @yield('header')
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.scripts')

</body>
</html>
