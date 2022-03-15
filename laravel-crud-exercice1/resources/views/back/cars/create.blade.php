@extends('back.layouts.app')

@section('cars.create')
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
    <form action="{{ route("back.cars.store") }}" method="post">
        @csrf
        <label for="">Brand :</label>
        <input type="text" name="brand" >
        <label for="">Year :</label>
        <input type="text" name="year" >
        <label for="">Color :</label>
        <input type="text" name="color" >
        <label for="">Price :</label>
        <input type="text" name="price" >
        <label for="">Reduction :</label>
        <input type="text" name="reduction" >
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
    