@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1>Photos</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('team.store') }}' method='post'>
            @csrf
            <tr>
                
                <td><label for=>Clubname</label>
                    <input type='text' name='clubname'></td>
                {{-- <td>{{ $team->city }}</td>
                <td>{{ $team->country }}</td>
                <td>{{ count($team->players->where("role_id", 1)) }}/{{ $team->maxrole }}</td>
                <td>{{ count($team->players->where("role_id", 2)) }}/{{ $team->maxrole }}</td>
                <td>{{ count($team->players->where("role_id", 3)) }}/{{ $team->maxrole }}</td>
                <td>{{ count($team->players->where("role_id", 4)) }}/{{ $team->maxrole }}</td>
                <td>{{ count($team->players) }}/{{ $team->maxplayer }}</td>
                <td> {{-- all_td_anchor  
                    <div class='d-flex'>
                        <a class='btn btn-warning mx-2' href='{{ route('team.edit', $team->id) }}' role='button'>Edit</a>
                        <a class='btn btn-primary mx-2' href='{{ route('team.read', $team->id) }}' role='button'>Read</a>
                        <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td> --}}
            </tr>
            <div>
                
            </div>
            <div>
                <label for=>Img</label>
                <input type='text' name='img'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
