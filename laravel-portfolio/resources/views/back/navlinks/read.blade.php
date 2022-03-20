@extends('back.layouts.app')

@section('navlinks.read')
@include('front.partials.navback')
<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Read</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Path</th>
                <th scope="col">Text</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $navlink->id }}</th>
                <td>{{ $navlink->icon }}</td>
                <td>{{ $navlink->path }}</td>
                <td>{{ $navlink->text }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.navlinks.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
