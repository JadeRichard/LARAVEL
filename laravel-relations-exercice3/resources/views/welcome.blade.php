@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
<div class='container'>
    <h1 class='my-5'>Dashboard</h1>
    

    <h3 class='my-5'>C Club</h1>
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
    
                
                    <tr>
                        <th scope='row'>{{ $teams[2]->id }}</th>
                        <td>{{ $teams[2]->clubname }}</td>
                        <td>{{ $teams[2]->city }}</td>
                        <td>{{ $teams[2]->country }}</td>
                        <td>{{ count($teams[2]->players->where("role_id", 1)) }}/{{ $teams[2]->maxrole }}</td>
                        <td>{{ count($teams[2]->players->where("role_id", 2)) }}/{{ $teams[2]->maxrole }}</td>
                        <td>{{ count($teams[2]->players->where("role_id", 3)) }}/{{ $teams[2]->maxrole }}</td>
                        <td>{{ count($teams[2]->players->where("role_id", 4)) }}/{{ $teams[2]->maxrole }}</td>
                        <td>{{ count($teams[2]->players) }}/{{ $teams[2]->maxplayer }}</td>
                        <td> {{-- all_td_anchor  --}}
                            <div class='d-flex'>
                                <a class='btn btn-warning mx-2' href='{{ route('team.edit', $teams[2]->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-2' href='{{ route('team.read', $teams[2]->id) }}' role='button'>Read</a>
                                <form action="{{ route('team.destroy', $teams[2]->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
            </tbody>
        </table>

       
            
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
                
                @foreach ($playerSpain as $player)
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
        <br><br>

        <h3 class='my-5'>B Club</h1>
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
        
                    
                        <tr>
                            <th scope='row'>{{ $teams[1]->id }}</th>
                            <td>{{ $teams[1]->clubname }}</td>
                            <td>{{ $teams[1]->city }}</td>
                            <td>{{ $teams[1]->country }}</td>
                            <td>{{ count($teams[1]->players->where("role_id", 1)) }}/{{ $teams[1]->maxrole }}</td>
                            <td>{{ count($teams[1]->players->where("role_id", 2)) }}/{{ $teams[1]->maxrole }}</td>
                            <td>{{ count($teams[1]->players->where("role_id", 3)) }}/{{ $teams[1]->maxrole }}</td>
                            <td>{{ count($teams[1]->players->where("role_id", 4)) }}/{{ $teams[1]->maxrole }}</td>
                            <td>{{ count($teams[1]->players) }}/{{ $teams[1]->maxplayer }}</td>
                            <td> {{-- all_td_anchor  --}}
                                <div class='d-flex'>
                                    <a class='btn btn-warning mx-2' href='{{ route('team.edit', $teams[1]->id) }}' role='button'>Edit</a>
                                    <a class='btn btn-primary mx-2' href='{{ route('team.read', $teams[1]->id) }}' role='button'>Read</a>
                                    <form action="{{ route('team.destroy', $teams[1]->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        
                </tbody>
            </table>
    
           
                
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
                    
                    @foreach ($playerTaiwan as $player)
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
            <br><br>


        <h3>Players with a team</h3>
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
                
                @foreach ($rteam as $player)
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
        <br><br>
        <h3>Players with no team</h3>
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
                
                @foreach ($noteam as $player)
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
        <br><br>

        <h3>Female players</h3>
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
                @php
                    $i = 0;
                @endphp
                @foreach ($playerF as $player)
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
                    @php
                        
                    if (++$i == 5) break;
                    @endphp
                @endforeach
            </tbody>
        </table>
        <br><br>
        <h3>Male players</h3>
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
                @php
                    $i = 0;
                @endphp
                @foreach ($playerM as $player)
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
                    @php
                        
                    if (++$i == 5) break;
                    @endphp
                @endforeach
            </tbody>
        </table>
        <br><br>
        <h3 class='my-5'>European Clubs</h1>
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
        
                    @foreach ($teams->where("country", "France") as $team)
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
                    @foreach ($teams->where("country", "Spain") as $team)
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

            <h3 class='my-5'>Non-european Clubs</h1>
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
            
                        @foreach ($teams->where("country", "Taiwan") as $team)
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
                        @foreach ($teams->where("country", "Australia") as $team)
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