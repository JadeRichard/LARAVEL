@extends('back.layouts.app')

@section('titles.read')
    <h1>Read</h1>


    <label for="">Title : {{ $title->title }}</label>

    <label for="">Subtitle : {{ $title->subtitle }}</label>


    <a type="submit" class="btn btn-warning" href="{{ route('back.titles.all') }}">Back</button>
@endsection
