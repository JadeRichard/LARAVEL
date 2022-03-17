@extends('back.layouts.app')

@section('navlinks.read')
    <h1>Read</h1>


    <label for="">Icon : {{ $navlink->icon }}</label>

    <label for="">Path : {{ $navlink->path }}</label>

    <label for="">Text : {{ $navlink->text }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.navlinks.all') }}">Back</button>
@endsection
