@extends('back.layouts.app')

@section('iconss.create')
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
    <form action="{{ route('back.iconss.store') }}" method="post">
        @csrf
        <label for="">Source :</label>
        <input type="text" name="source">
        <label for="">Link :</label>
        <input type="text" name="link">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
