@extends('back.layouts.app')

@section('teams.create')
    <h1>Create</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route("back.teams.store") }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" >
        <label for="">Number :</label>
        <input type="text" name="number" >
        <label for="">Coach :</label>
        <input type="text" name="coach" >
        <label for="">Post :</label>
        <input type="text" name="post" >
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
    