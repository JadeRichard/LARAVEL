@extends('back.layouts.app')

@section('cars.edit')
    <h1>Edit</h1>
    
    <form action="{{ route("back.cars.update", $car->id) }}" method="post">
        @csrf
        <label for="">Brand :</label>
        <input type="text" name="brand" value="{{ $car->brand }}">
        <label for="">Year :</label>
        <input type="text" name="year" value="{{ $car->year }}">
        <label for="">Color :</label>
        <input type="text" name="color" value="{{ $car->color }}">
        <label for="">Price :</label>
        <input type="text" name="price" value="{{ $car->price }}" >
        <label for="">Reduction :</label>
        <input type="text" name="reduction" value="{{ $car->reduction }}" >
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>

@endsection
    