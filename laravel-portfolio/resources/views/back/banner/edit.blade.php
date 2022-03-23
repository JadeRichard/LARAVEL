@extends('back.layouts.app')

@section('banner.edit')
    <h1>Edit</h1>

    <form action="{{ route('banners.update', $banner->id) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">Name :</label>
        <input type="text" name="name" value="{{ $banner->name }}">
        <label for="">Description :</label>
        <input type="text" name="description" value="{{ $banner->description }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
