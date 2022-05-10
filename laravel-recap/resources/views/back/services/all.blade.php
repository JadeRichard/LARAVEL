@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container'>
        <h1 class='my-5'>Services</h1>
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

        @can('create', App\Models\Service::class)
        <a href="{{ route('services.create') }}" class="btn btncus mb-5" style="background-color: #429db6; color: white;" >Create</a>
        @endcan
        
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Button_Text</th>
                    <th scope='col'style="text-align: center;">Button_Link</th>
                    <th scope='col'style="text-align: center;">Icon</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $item)
                    <tr>
                        <th scope='row' style="text-align: center;">{{ $item->id }}</th>
                        <td style="text-align: center;">{{ $item->title }}</td>
                        <td style="text-align: center;">{{ $item->description }}</td>
                        <td style="text-align: center;">{{ $item->button_text }}</td>
                        <td style="text-align: center;">{{ $item->button_link }}</td>
                        <td style="text-align: center;"><img src="{{ "/images/" . $item->icon }}" alt=""></td>
                        <td style="text-align: center;"> 
                            <div class='d-flex justify-content-center'>
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('services.edit', $item->id) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3 mx-2' style="background-color: #429db6; color: white;" href='{{ route('services.show', $item->id) }}' role='button'>Read</a>
                                @can('delete', $item)
                                <form action="{{ route('services.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btncus2" style="background-color: #429db6; color: white;" >Delete</button>
                                </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
