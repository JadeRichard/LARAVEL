@extends('back.layouts.app')

@section('facts.read')
@include('front.partials.navback')
    <div class="container" style="height:30vh; width:50%; margin-top:200px">
        <h1>Read</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Number</th>
                    <th scope="col">Important</th>
                    <th scope="col">Text</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $fact->id }}</th>
                    <td>{{ $fact->icon }}</td>
                    <td>{{ $fact->number }}</td>
                    <td>{{ $fact->important }}</td>
                    <td>{{ $fact->text }}</td>
                    <td><a type="submit" class="btn btn-warning" href="{{ route('back.facts.all') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>

    </div>
@endsection
