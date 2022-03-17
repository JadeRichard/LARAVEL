@extends('back.layouts.app')

@section('portfolios.read')
    <h1>Read</h1>


    <label for="">Image : {{ $portfolio->image }}</label>

    <label for="">Title : {{ $portfolio->title }}</label>

    <label for="">Filter : {{ $portfolio->filter }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.portfolios.all') }}">Back</button>
@endsection
