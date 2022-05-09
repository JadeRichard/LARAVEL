@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container'>
        <h1 class='my-5'>Testimonials</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
                @foreach ($testimonials as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->date }}</td>
                        <td style="text-align: center;">{{ $item->rating }}</td>
                        <td style="text-align: center;">{{ $item->designation }}</td>
                        <td style="text-align: center;">{{ $item->category }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <img src='{{ asset("storage/$item->photo") }}' width='100px' height='100px' alt='{{ $item->name }}' class='img-fluid'>
                            </div>
                        </td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('testimonials.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('testimonials.show', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
