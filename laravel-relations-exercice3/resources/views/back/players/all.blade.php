@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Players</h1>
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
        <a class='btn btn-success' href='{{ route('player.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>First name</th>
                    <th scope='col'>Age</th>
                    <th scope='col'>Telephone</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Gender</th>
                    <th scope='col'>Country</th>
                    <th scope='col'>Role</th>
                    <th scope='col'>Team</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <th scope='row'>{{ $player->id }}</th>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->firstname }}</td>
                        <td>{{ $player->age }}</td>
                        <td>{{ $player->telnumber }}</td>
                        <td>{{ $player->email }}</td>
                        <td>{{ $player->gender }}</td>
                        <td>{{ $player->country }}</td>
                        <td>{{ $player->role->name }}</td>
                        <td>{{ $player->team->clubname }}</td>

                        
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-warning mx-2' href='{{ route('player.edit', $player->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-2' href='{{ route('player.read', $player->id) }}' role='button'>Read</a>
                                <form action="{{ route('player.destroy', $player->id) }}" method="POST">
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


    <div class="container">
        
    {{ $players->links() }}
    </div>
@endsection
