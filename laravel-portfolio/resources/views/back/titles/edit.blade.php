@extends('back.layouts.app')

@section('titles.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.titles.update', $title->id) }}" method="post">
        @csrf
        <label for="">Title :</label>
        <input type="text" name="title" value="{{ $title->title }}">
        <label for="">Subtitle :</label>
        <input type="text" name="subtitle" value="{{ $title->subtitle }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
