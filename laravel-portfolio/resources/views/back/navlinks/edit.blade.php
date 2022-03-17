@extends('back.layouts.app')

@section('navlinks.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.navlinks.update', $navlink->id) }}" method="post">
        @csrf
        <label for="">Icon :</label>
        <input type="text" name="icon" value="{{ $navlink->icon }}">
        <label for="">Path :</label>
        <input type="text" name="path" value="{{ $navlink->path }}">
        <label for="">Text :</label>
        <input type="text" name="text" value="{{ $navlink->text }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
