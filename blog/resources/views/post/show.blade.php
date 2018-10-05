{{-- mengambil header dari layouts/app --}}
@extends('layouts/app');

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
            </div>
        </div>
    </div>
@endsection