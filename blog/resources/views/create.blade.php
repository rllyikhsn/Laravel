@extends('layout.app')
@section('title')
    Halaman Create CRUD
@endsection
@section('body')
    <h1>Halaman Create POST CRUD</h1>
    <form action="{{ route('postCRUD.store') }}" method="post">
        {{ csrf_field() }}
        <label for="Title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="Body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection