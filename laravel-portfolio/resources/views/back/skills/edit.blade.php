@extends('back.layouts.app')

@section('skills.edit')
    <h1>Edit</h1>

    <form action="{{ route('skills.update', $skill->id) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">Skill :</label>
        <input type="text" name="skill" value="{{ $skill->skill }}">
        <label for="">Value :</label>
        <input type="number" name="value" value="{{ $skill->value }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
