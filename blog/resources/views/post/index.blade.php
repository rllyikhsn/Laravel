@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- melakukan perulangan pemecahan data dari controler var $posts --}}
                @foreach ($posts as $post)
                    <div class="card">
                        {{-- memanggil atribut title dari pemecahan data --}}
                        <div class="card-header">
                            {{-- membuat routing untuk menuju halaman show --}}
                            <a href="{{ route('post.show', $post) }}"> {{ $post->title}}</a>
                            <div class="float-right">
                                {{-- melakukan aksi ke inisial post.destroy dengan mengembalikan parameter,
                                    $post sebagai id yang dipilih --}}
                                <form action="{{ route('post.destroy', $post) }}" class="" method="post">

                                    <a href="{{ route('post.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
                                    {{-- menggunakan csrf untuk token laravel --}}
                                    {{ csrf_field() }}
                                    {{-- menggunakan method field "DELETE" pada routes/web.php --}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- memberikan limit pada kontent, dengan max 100 character, dan dikakhiri ... --}}
                            <p>{{ str_limit($post->content, 100, ' ...') }}</p>
                        </div>
                    </div><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection