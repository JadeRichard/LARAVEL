@extends('back.layouts.app')

@section('abouts.read')
    <h1>Read</h1>


    <label for="">Info : {{ $about->info }}</label>

    <label for="">Text : {{ $about->text }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.abouts.all') }}">Back</button>
    @endsection
