@extends('back.layouts.app')

@section('banner.show')

@include('front.partials.navback')
<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Show</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $banner->id }}</th>
                <td>{{ $banner->name }}</td>
                <td>{{ $banner->description }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.banners.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>
@endsection
