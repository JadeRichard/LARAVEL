@extends('back.layouts.app')

@section('portfolios.create')
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
    <form action="{{ route('portfolios.store') }}" method="post"  enctype="multipart/form-data" >
        @csrf
        <label for="">Image :</label>
        <input type="file" name="image">
        <label for="">Title :</label>
        <input type="text" name="title">
        <label for="">Filter :</label>
        <input type="text" name="filter">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
