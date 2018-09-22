<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Page CRUD</title>
</head>
<body>
    <h1>Halaman Posts</h1>
    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <li>{{ $post['title'] }}</li>
            @endforeach
        </ul>
        @else
        <p>Tidak Ada Data !</p>
    @endif
</body>
</html>