<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
        @yield('titleList')
        @yield('titleMovie')
        @yield('error')
    </title>
</head>
<body>
    @include('partials.nav')

    @yield('content')
    @yield('list')
    @yield('movie')
    @yield('404')

    @include('partials.footer')
</body>
</html>
