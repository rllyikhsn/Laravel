@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title">
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

            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="" class="form-control" cols="30" rows="10" placeholder="Post Content"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection