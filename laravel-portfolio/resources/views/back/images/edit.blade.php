@extends('back.layouts.app')

@section('images.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.images.update', $image->id) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="">Source :</label>
        <input type="file" name="source" value="{{ $image->source }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection