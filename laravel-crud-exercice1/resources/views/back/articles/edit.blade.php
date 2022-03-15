@extends('back.layouts.app')

@section('articles.edit')
    <h1>Edit</h1>
    
    <form action="{{ route("back.articles.update", $article->id) }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" value="{{ $article->name }}">
        <label for="">Description :</label>
        <input type="text" name="description" value="{{ $article->description }}">
        <label for="">Author :</label>
        <input type="text" name="author" value="{{ $article->author }}">
        <label for="">Publication Date :</label>
        <input type="text" name="pubdate" value="{{ $article->pubdate }}" >
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>

@endsection
    