@extends('back.layouts.app')

@section('skills.read')
    <h1>Read</h1>


    <label for="">Skill : {{ $skill->skill }}</label>

    <label for="">Value : {{ $skill->value }}</label>

    <a type="submit" class="btn btn-warning" href="{{ route('back.skills.all') }}">Back</button>
@endsection
