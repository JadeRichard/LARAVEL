@extends('back.layouts.app')

@section('testimonials.show')
@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Show</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Icon</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $testimonial->id }}</th>
                <td>{{ $testimonial->text }}</td>
                <td><img src="{{ asset("img/" . $testimonial->icon) }}" alt=""></td>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->role }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.testimonials.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>
 @endsection
