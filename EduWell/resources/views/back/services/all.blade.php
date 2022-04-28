@extends('back.layouts.app')
@section('content')
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
            
        <a href="{{ route('services.create') }}" class="btn btncus">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Icon</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($services as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td><img src="{{ "/images/" . $item->icon }}" alt=""></td>
                        <td>{!! $item->title !!}</td>
                        <td>{{ $item->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $item)
                                <form action="{{ route('services.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btncus2 ">Delete</button>
                                </form>
                                @endcan
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' href='{{ route('services.edit', $item ) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3' href='{{ route('services.show', $item ) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
