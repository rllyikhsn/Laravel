<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KegiatanKampus</title>
    @include('templates.partials._head')
</head>

<body>
    @include('templates.partials._nav')
    @yield('content')    
    @include('templates.partials._footer')
</body>

</html>