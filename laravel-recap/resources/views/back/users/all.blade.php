@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container'>
        <h1 class='my-5'>Users</h1>
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
        
        <a href="{{ route('users.create') }}" class="btn btncus mb-5" style="background-color: #429db6; color: white;">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Password</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->name }}</td>
                        <td style="text-align: center;">{{ $item->email }}</td>
                        <td style="text-align: center;">{{ $item->password }}</td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('users.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('users.show', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
