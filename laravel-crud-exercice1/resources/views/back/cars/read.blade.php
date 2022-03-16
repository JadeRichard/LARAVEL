@extends('back.layouts.app')

@section('cars.read')
    <h1>Read</h1>
    
    
        <label for="">Brand : {{ $car->brand }}</label>
        
        <label for="">Year : {{ $car->year }}</label>
        
        <label for="">Color : {{ $car->color }}</label>
        
        <label for="">Price : {{ $car->price }}</label>
        
        <label for="">Reduction : {{ $car->reduction }}</label>
        
        <a type="submit" class="btn btn-warning" href="{{ route('back.cars.all') }}">Back</button>
    

@endsection
    