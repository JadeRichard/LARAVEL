@extends('back.layouts.app')

@section('images.show')

@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Show</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Source</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $image->id }}</th>
                <td>{{ $image->source }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.images.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
