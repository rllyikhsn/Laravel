{{-- mengambil header dari layouts/app --}}
@extends('layouts/app');

{{-- memasukkan content  --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    {{-- memanggil atribut title dari pemecahan data --}}
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                        {{-- melakukan pembuatan form dengan action sesuai dengan kebutuhan,
                            pada form ini melakukan aksi ke route dengan inisial post.update,
                            dan melakukan pelemparan value dari parameter id karena update
                            membutuhkan id --}}
                        <form action="{{ route('post.update', $post) }}" method="post">
                            {{-- memanggil token setiap penggunaan form --}}
                            {{ csrf_field() }}
                            {{-- memanggil method patch sesuai dengan route(web.php),
                                karena pada html tidak disediakan method patch, dan harus
                                dipanggil terlebih dahulu --}}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="">Title</label>
                                {{-- value = memberikan nilai default dari parsing variabel $post yang bernilai sesuai dengan route --}}
                                <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ $post->title }}">
                            </div>
                            
                            {{-- melakukan pemanggilan controler --}}
                            <div class="form-group">
                                <label for="">Category</label>
                                {{-- melaukan pemilihan atau dropdown --}}
                                <select name="categori_id" id="" class="form-control">
                                    {{-- pemecahan array dari postcontroller variabel $categories --}}
                                    @foreach ($categories as $category)
                                        {{-- melakukan pemilihan dari pemecahan categories ke inisial cateogry --}}
                                        <option 
                                        value="{{ $category->id }}" 
                                        {{-- mengecek kondisi kategory id jika sama post number maka kategori dipilih --}}
                                        @if ($category->id === $post->category_id)
                                            selected
                                        @endif
                                            >{{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="">Content</label>
                                {{-- {{$post->content}} adalah mengambil nilai dari variabel yang sudah di parsing di controller --}}
                                <textarea name="content" id="" class="form-control" cols="30" rows="10" placeholder="Post Content" >{{ $post->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection