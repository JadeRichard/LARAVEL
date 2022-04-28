@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Maps</h1>
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
                    <th scope='col'>Link</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($maps as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td>{!! $item->link !!}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btncus3 mx-2' href='{{ route('maps.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btncus3' href='{{ route('maps.read', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
