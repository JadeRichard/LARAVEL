@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Testimonials</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Rating</th>
                    <th scope='col'style="text-align: center;">Designation</th>
                    <th scope='col'style="text-align: center;">Category</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Photo</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonials->id }}</th>
                    
                        <td>{{ $testimonials->name }}</td>
                        <td>{{ $testimonials->date }}</td>
                        <td>{{ $testimonials->rating }}</td>
                        <td>{{ $testimonials->designation }}</td>
                        <td>{{ $testimonials->category }}</td>
                        <td>{{ $testimonials->description }}</td>
                        <td>
                            <img src="{{ asset('storage/testimonials/'.$testimonials->photo) }}" alt="{{ $testimonials->name }}" width="100px">
                        </td>
                        
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('testimonials.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
