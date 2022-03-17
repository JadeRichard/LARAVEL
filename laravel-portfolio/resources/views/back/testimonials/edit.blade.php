@extends('back.layouts.app')

@section('testimonials.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.testimonials.update', $testimonial->id) }}" method="post">
        @csrf
        <label for="">Text :</label>
        <input type="text" name="text" value="{{ $testimonial->text }}">
        <label for="">Icon :</label>
        <input type="text" name="icon" value="{{ $testimonial->icon }}">
        <label for="">Name :</label>
        <input type="text" name="name" value="{{ $testimonial->name }}">
        <label for="">Role :</label>
        <input type="text" name="role" value="{{ $testimonial->role }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
