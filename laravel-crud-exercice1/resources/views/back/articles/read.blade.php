@extends('back.layouts.app')

@section('articles.read')
    <h1>Read</h1>
    
    
        <label for="">Name : {{ $article->name }}</label>
        
        <label for="">Description : {{ $article->description }}</label>
        
        <label for="">Author : {{ $article->author }}</label>
    
        <label for="">Publication Date : {{ $article->pubdate }}</label>
    
        <a type="submit" class="btn btn-warning" href="{{ route('back.articles.all') }}">Back</button>
    

@endsection
    