@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Photos</h1>
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
        <a class='btn btn-success' href='{{ route('photo.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Clubname</th>
                    <th scope='col'>City</th>
                    <th scope='col'>Country</th>
                    <th scope='col'>Front</th>
                    <th scope='col'>Middle</th>
                    <th scope='col'>Back</th>
                    <th scope='col'>Substitute</th>
                    <th scope='col'>Total players</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>

                {{-- @for ($i = 0; $i < 4; $i++)
                <tr>
                    <th scope='row'>{{ $photos[$i]->id }}</th>
                    <td>{{ $photos[$i]->clubname }}</td>
                    <td>{{ $photos[$i]->city }}</td>
                    <td>{{ $photos[$i]->country }}</td>
                    <td>{{ count($photos[$i]->players->where("role_id", 1)) }}/{{ $photos[$i]->maxrole }}</td>
                    <td>{{ count($photos[$i]->players->where("role_id", 2)) }}/{{ $photos[$i]->maxrole }}</td>
                    <td>{{ count($photos[$i]->players->where("role_id", 3)) }}/{{ $photos[$i]->maxrole }}</td>
                    <td>{{ count($photos[$i]->players->where("role_id", 4)) }}/{{ $photos[$i]->maxrole }}</td>
                    <td>{{ count($photos[$i]->players) }}/{{ $photos[$i]->maxplayer }}</td>
                    <td> {{-- all_td_anchor --
                        <div class='d-flex'>
                            <a class='btn btn-warning mx-2' href='{{ route('photo.edit', $photos[$i]->id) }}' role='button'>Edit</a>
                            <a class='btn btn-primary mx-2' href='{{ route('photo.read', $photos[$i]->id) }}' role='button'>Read</a>
                            <form action="{{ route('photo.destroy', $photos[$i]->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endfor --}}

                @foreach ($photos as $photo)
                    <tr>
                        <th scope='row'>{{ $photo->id }}</th>
                        <td>{{ $photo->img }}</td>
                        {{-- <td>{{ $photo->city }}</td> --}}
                        <td> {{-- all_td_anchor  --}}
                            <div class='d-flex'>
                                <a class='btn btn-warning mx-2' href='{{ route('photo.edit', $photo->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-2' href='{{ route('photo.read', $photo->id) }}' role='button'>Read</a>
                                <form action="{{ route('photo.destroy', $photo->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
