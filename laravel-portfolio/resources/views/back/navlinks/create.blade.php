@extends('back.layouts.app')

@section('navlinks.create')
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
    <form action="{{ route('back.navlinks.store') }}" method="post">
        @csrf
        <label for="">Icon :</label>
        <input type="text" name="icon">
        <label for="">Path :</label>
        <input type="text" name="path">
        <label for="">Text :</label>
        <input type="text" name="text">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
