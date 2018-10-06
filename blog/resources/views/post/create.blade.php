@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}
            {{-- melakukan pengecekan validasi dengan has-feedback sesuai dengan name input,
                 ? = menampilkan 'kepemilikan error' : tidak ada 'kosong' --}}
            <div class="form-group has-feedback{{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="">Title</label>
                {{-- helper old digunakan untuk mengembalikan nilai dengan nama yang akan di kembalikan,
                     ketika proses submit masih terdapat kekuruangan --}}
                <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ old('title') }}">
                {{-- menampilkan pesan error dengan pengecekan --}}
                @if ($errors->has('title'))
                    {{-- menampilkan span --}}
                    <span class="label label-danger">
                        {{-- menampilkan text jika error dari name tittle --}}
                        <p style="color:red">{{ $errors->first('title') }}</p>
                    </span>
                @endif
            </div>
            
            {{-- melakukan pemanggilan controler --}}
            <div class="form-group">
                <label for="">Category</label>
                {{-- melaukan pemilihan atau dropdown --}}
                <select name="categori_id" id="" class="form-control">
                    {{-- pemecahan array dari postcontroller variabel $categories --}}
                    @foreach ($categories as $category)
                        {{-- melakukan pemilihan dari pemecahan categories ke inisial cateogry --}}
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group has-feedback{{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="">Content</label>
                <textarea name="content" id="" class="form-control" cols="30" rows="10" placeholder="Post Content" >{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    {{-- menampilkan span --}}
                    <span class="label label-danger">
                        <p style="color:red">{{ $errors->first('content') }}</p>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection