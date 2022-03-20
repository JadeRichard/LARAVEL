@extends('back.layouts.app')

@section('abouts.read')

@include('front.partials.navback')
<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Read</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Info</th>
                <th scope="col">Text</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $about->id }}</th>
                <td>{{ $about->info }}</td>
                <td>{{ $about->text }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.abouts.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>
@endsection
