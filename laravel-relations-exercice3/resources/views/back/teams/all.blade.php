@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Teams</h1>
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
        <a class='btn btn-success' href='{{ route('team.create') }}' role='button'>Create</a>
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
                    <th scope='row'>{{ $teams[$i]->id }}</th>
                    <td>{{ $teams[$i]->clubname }}</td>
                    <td>{{ $teams[$i]->city }}</td>
                    <td>{{ $teams[$i]->country }}</td>
                    <td>{{ count($teams[$i]->players->where("role_id", 1)) }}/{{ $teams[$i]->maxrole }}</td>
                    <td>{{ count($teams[$i]->players->where("role_id", 2)) }}/{{ $teams[$i]->maxrole }}</td>
                    <td>{{ count($teams[$i]->players->where("role_id", 3)) }}/{{ $teams[$i]->maxrole }}</td>
                    <td>{{ count($teams[$i]->players->where("role_id", 4)) }}/{{ $teams[$i]->maxrole }}</td>
                    <td>{{ count($teams[$i]->players) }}/{{ $teams[$i]->maxplayer }}</td>
                    <td> {{-- all_td_anchor --
                        <div class='d-flex'>
                            <a class='btn btn-warning mx-2' href='{{ route('team.edit', $teams[$i]->id) }}' role='button'>Edit</a>
                            <a class='btn btn-primary mx-2' href='{{ route('team.read', $teams[$i]->id) }}' role='button'>Read</a>
                            <form action="{{ route('team.destroy', $teams[$i]->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endfor --}}

                @foreach ($teams as $team)
                    <tr>
                        <th scope='row'>{{ $team->id }}</th>
                        <td>{{ $team->clubname }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->country }}</td>
                        <td>{{ count($team->players->where("role_id", 1)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 2)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 3)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 4)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players) }}/{{ $team->maxplayer }}</td>
                        <td> {{-- all_td_anchor  --}}
                            <div class='d-flex'>
                                <a class='btn btn-warning mx-2' href='{{ route('team.edit', $team->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-2' href='{{ route('team.read', $team->id) }}' role='button'>Read</a>
                                <form action="{{ route('team.destroy', $team->id) }}" method="POST">
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
