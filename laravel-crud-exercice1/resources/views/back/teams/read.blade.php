@extends('back.layouts.app')

@section('teams.read')
    <h1>Read</h1>
    
    
        <label for="">Name : {{ $team->name }}</label>
        
        <label for="">Number : {{ $team->number }}</label>
        
        <label for="">Coach : {{ $team->coach }} </label>
        
        <label for="">Post : {{ $team->post }}</label>
        
        <a type="submit" class="btn btn-warning" href="{{ route('back.teams.all') }}">Back</button>

@endsection
    