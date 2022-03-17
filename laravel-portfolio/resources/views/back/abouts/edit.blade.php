@extends('back.layouts.app')

@section('abouts.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.abouts.update', $about->id) }}" method="post">
        @csrf
        <label for="">Info :</label>
        <input type="text" name="name" value="{{ $about->info }}">
        <label for="">Text :</label>
        <input type="text" name="description" value="{{ $about->text }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
