@extends('back.layouts.app')

@section('testimonials.read')
    <h1>Read</h1>


    <label for="">Text : {{ $testimonial->text }}</label>

    <label for="">Icon : {{ $testimonial->icon }}</label>

    <label for="">Name : {{ $testimonial->name }}</label>

    <label for="">Role : {{ $testimonial->role }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.testimonials.all') }}">Back</button>
@endsection
