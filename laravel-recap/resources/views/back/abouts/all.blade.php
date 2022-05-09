@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Abouts</h1>
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
                    <th scope='col'>#</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->link }}</td>
                        <td> 
                            <div class='d-flex'>
                                <a class='btn btncus3 mx-2' href='{{ route('abouts.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3' href='{{ route('abouts.read', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
