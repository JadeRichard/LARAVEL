@extends('back.layouts.app')

@section('facts.edit')
    <h1>Edit</h1>

    <form action="{{ route('facts.update', $fact->id) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">Icon :</label>
        <input type="text" name="icon" value="{{ $fact->icon }}">
        <label for="">Number :</label>
        <input type="number" name="number" value="{{ $fact->number }}">
        <label for="">Important :</label>
        <input type="text" name="important" value="{{ $fact->important }}">
        <label for="">Text :</label>
        <input type="text" name="text" value="{{ $fact->text }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
