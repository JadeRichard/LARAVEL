@extends('back.layouts.app')

@section('icons.read')

@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Read</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Source</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $icon->id }}</th>
                <td>{{ $icon->source }}</td>
                <td>{{ $icon->link }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.icons.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
