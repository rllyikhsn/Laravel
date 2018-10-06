{{-- mengambil header dari layouts/app --}}
@extends('layouts/app')

{{-- memasukkan content  --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="card">
                    {{-- memanggil atribut title dari pemecahan data --}}
                    <div class="card-header">
                        {{ $post->title}} | 
                        {{-- memberikan deskripsi kategory --}}
                        <small>{{ $post->category->name }}</small>
                    </div>
                    <div class="card-body">
                        {{-- memberikan limit pada kontent, dengan max 100 character, dan dikakhiri ... --}}
                        <p>{{ $post->content }}</p>
                    </div>
                </div><br>
                <div class="card">
                    {{-- Bagian untuk menambahkan komentar --}}
                    <div class="card-header">Tambahkan Komentar</div>
                    <div class="card-body">
                        {{-- pembuatan form komentar dengan method POST --}}
                        <form action="{{ route('post.comment.store', $post) }}" class="form-horizontal" method="POST">
                            {{-- CSRF field untuk token pada laravel --}}
                            {{ csrf_field() }}
                            {{-- name = field pada table comments di database --}}
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan Komentar ...">
                            </textarea><br>
                            <input type="submit" value="Komentar" class="btn btn-primary">
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
@endsection