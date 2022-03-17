@extends('back.layouts.app')

@section('skills.create')
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
    <form action="{{ route('back.skills.store') }}" method="post">
        @csrf
        <label for="">Skill :</label>
        <input type="text" name="skill">
        <label for="">Value :</label>
        <input type="number" name="value">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
