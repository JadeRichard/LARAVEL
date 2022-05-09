@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container'>
        <h1 class='my-5'>Images</h1>
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
                    <th scope='col'style="text-align: center;">Image</th>
                    <th scope='col'style="text-align: center;">Image_Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">
                            <img src='{{ asset("images/$item->image") }}' max-height='100px'>
                        </td>
                        <td style="text-align: center;">{{ $item->image_title }}</td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('images.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('images.show', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
