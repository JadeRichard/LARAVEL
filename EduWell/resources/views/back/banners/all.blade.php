@extends('back.layouts.app')
@section('content')
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
                    <th scope='col'>#</th>
                    <th scope='col'>Subtitle</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Button</th>
                    <th scope='col'>Image</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($banners as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td>{{ $item->subtitle }}</td>
                        <td>{!! $item->title !!}</td>
                        <td>{{ $item->button }}</td>
                        <td><img src="{{ asset("images/" . $item->image) }}" alt="" style="width:50%; height:50%;"></td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btncus3 mx-2' href='{{ route('banners.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3' href='{{ route('banners.read', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
