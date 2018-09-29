@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- melakukan perulangan pemecahan data dari controler var $posts --}}
                @foreach ($posts as $post)
                    <div class="card">
                        {{-- memanggil atribut title dari pemecahan data --}}
                        <div class="card-header">{{ $post->title}}</div>
                        <div class="card-body">
                            <p>{{ $post->content }}</p>
                        </div>
                    </div><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection