@extends('back.layouts.app')

@section('facts.read')
    <h1>Read</h1>


    <label for="">Icon : {{ $fact->icon }}</label>

    <label for="">Number : {{ $fact->number }}</label>

    <label for="">Important : {{ $fact->important }}</label>

    <label for="">Text : {{ $fact->text }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.facts.all') }}">Back</button>
@endsection
