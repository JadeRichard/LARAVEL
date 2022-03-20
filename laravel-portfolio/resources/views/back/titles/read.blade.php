@extends('back.layouts.app')

@section('titles.read')
@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Read</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $title->id }}</th>
                <td>{{ $title->title }}</td>
                <td>{{ $title->subtitle }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.titles.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
