@extends('back.layouts.app')

@section('facts.create')
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

    

    <form action="{{ route('back.facts.store') }}" method="post">
        @csrf
        <label for="">Icon :</label>
        <input type="text" name="icon">
        <label for="">Number :</label>
        <input type="number" name="number">
        <label for="">Important :</label>
        <input type="text" name="important">
        <label for="">Text :</label>
        <input type="text" name="text">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
