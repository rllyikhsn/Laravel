<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog | @yield('title')</title>
</head>
<body>
    {{-- memanggil file menu.blade.app --}}
    @include('layout.menu')
    {{-- membuat method untuk di panggil secara dinamis --}}
    @yield('body')
</body>
</html>