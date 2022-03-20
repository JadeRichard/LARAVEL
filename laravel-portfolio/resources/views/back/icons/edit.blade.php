@extends('back.layouts.app')

@section('icons.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.icons.update', $icon->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Source :</label>
        <input type="text" name="source" value="{{ $icon->source }}">
        <label for="">Link :</label>
        <input type="text" name="link" value="{{ $icon->link }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
