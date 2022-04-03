@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Players</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
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
                        <td> {{-- read_td_anchor --}}
                            <a class='btn btn-secondary' href='{{ route('player.index') }}' role='button'>Back</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        
        

        
    </div>
@endsection
