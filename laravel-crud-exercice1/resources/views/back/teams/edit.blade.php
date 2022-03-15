@extends('back.layouts.app')

@section('teams.edit')
    <h1>Edit</h1>
    
    <form action="{{ route("back.teams.update", $team->id) }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" value="{{ $team->name }}">
        <label for="">Number :</label>
        <input type="text" name="number" value="{{ $team->number }}">
        <label for="">Coach :</label>
        <input type="text" name="coach" value="{{ $team->coach }}">
        <label for="">Post :</label>
        <input type="text" name="post" value="{{ $team->post }}" >
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>

@endsection
    