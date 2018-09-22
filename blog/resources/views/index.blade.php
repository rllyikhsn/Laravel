{{-- Menggunakan method untuk memanggil layout app.blade.php dengan extends --}}
@extends('layout.app')

{{-- Memanggil yield title dengan section --}}
@section('title')
    {{-- sub title dari title --}}
    Halaman Data Post
@endsection

{{-- Memanggil yield body dengan section --}}
@section('body')
    <h1>Halaman Posts </h1>
    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <a href="{{ route('postCRUD.show', $post['id']) }}">
                    <li>{{ $post['title'] }}</li>
                </a>
            @endforeach
        </ul>
        @else
        <p>Tidak Ada Data !</p>
    @endif
@endsection