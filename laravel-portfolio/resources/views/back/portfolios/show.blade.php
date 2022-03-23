@extends('back.layouts.app')

@section('portfolios.show')

@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Show</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Filter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $portfolio->id }}</th>
                <td>{{ $portfolio->image }}</td>
                <td>{{ $portfolio->title }}</td>
                <td>{{ $portfolio->filter }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.portfolios.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
