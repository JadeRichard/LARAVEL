@extends('back.layouts.app')

@section('portfolios.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.portfolios.update', $portfolio->id) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="">Image :</label>
        <input type="file" name="image" value="{{ $portfolio->image }}">
        <label for="">Title :</label>
        <input type="text" name="title" value="{{ $portfolio->title }}">
        <label for="">Filter :</label>
        <input type="text" name="filter" value="{{ $portfolio->filter }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
