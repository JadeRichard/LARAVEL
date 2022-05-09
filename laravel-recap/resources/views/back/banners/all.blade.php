@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container'>
        <h1 class='my-5'>Banners</h1>
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
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Button_1_Text</th>
                    <th scope='col'style="text-align: center;">Button_1_Link</th>
                    <th scope='col'style="text-align: center;">Button_1_Icon</th>
                    <th scope='col'style="text-align: center;">Button_2_Text</th>
                    <th scope='col'style="text-align: center;">Button_2_Link</th>
                    <th scope='col'style="text-align: center;">Button_2_Icon</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;">{{ $item->button_1_text }}</td>
                        <td style="text-align: center;">{{ $item->button_1_link }}</td>
                        <td style="text-align: center;">{{ $item->button_1_icon }}</td>
                        <td style="text-align: center;">{{ $item->button_2_text }}</td>
                        <td style="text-align: center;">{{ $item->button_2_link }}</td>
                        <td style="text-align: center;">{{ $item->button_2_icon }}</td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('banners.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('banners.show', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
