@extends('back.layouts.app')

@section('articles.create')
    <h1>Create</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route("back.articles.store") }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" >
        <label for="">Description :</label>
        <input type="text" name="description" >
        <label for="">Author :</label>
        <input type="text" name="author" >
        <label for="">Publication Date :</label>
        <input type="text" name="pubdate" >
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
    