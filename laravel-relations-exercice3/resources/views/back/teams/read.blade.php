@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Teams</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $team->id }}</th>
                    <td>{{ $team->clubname }}</td>
                    <td>{{ $team->city }}</td>
                    <td>{{ $team->country }}</td>
                    <td>{{ count($team->players->where("role_id", 1)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 2)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 3)) }}/{{ $team->maxrole }}</td>
                        <td>{{ count($team->players->where("role_id", 4)) }}/{{ $team->maxrole }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-secondary' href='{{ route('team.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2 class='my-5'>Players</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>First name</th>
                        <th scope='col'>Age</th>
                        <th scope='col'>Telephone</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Gender</th>
                        <th scope='col'>Country</th>
                        <th scope='col'>Role</th>
                        <th scope='col'>Team</th>

                    </tr> {{-- read_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($team->players as $item)
                    <tr>
                        
                        
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->telnumber }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->country }}</td>
                        <td>{{ $item->role->name }}</td>
                        <td>{{ $item->team->clubname }}</td>
                        <td><a class='btn btn-primary mx-2' href='{{ route('player.read', $item->id) }}' role='button'>Read</a></td>
                        
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        
        

        
    </div>
@endsection
