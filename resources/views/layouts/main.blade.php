<!doctype html>
<html>
<head>
    @include('includes.head')

</head>
<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.scripts')

</body>
</html>
