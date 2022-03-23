@extends('back.layouts.app')

@section('abouts.edit')
    <h1>Edit</h1>

    <form action="{{ route('abouts.update', $about->id) }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Info :</label>
        <input type="text" name="info" value="{{ $about->info }}">
        <label for="">Text :</label>
        <input type="text" name="text" value="{{ $about->text }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
