@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Photos</h1>
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
                    <th scope='row'>{{ $photo->id }}</th>
                    <td>{{ $photo->clubname }}</td>
                    <td>{{ $photo->city }}</td>
                    <td>{{ $photo->country }}</td>
                    <td>{{ count($photo->players->where("role_id", 1)) }}/{{ $photo->maxrole }}</td>
                        <td>{{ count($photo->players->where("role_id", 2)) }}/{{ $photo->maxrole }}</td>
                        <td>{{ count($photo->players->where("role_id", 3)) }}/{{ $photo->maxrole }}</td>
                        <td>{{ count($photo->players->where("role_id", 4)) }}/{{ $photo->maxrole }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-secondary' href='{{ route('photo.index') }}' role='button'>Back</a>
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
                        <th scope='col'>photo</th>

                    </tr> {{-- read_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($photo as $item)
                    <tr>
                        
                        
                        <td>{{ $item->img }}</td>
                        {{-- <td>{{ $item->firstname }}</td> --}}
                        <td><a class='btn btn-primary mx-2' href='{{ route('player.read', $item->id) }}' role='button'>Read</a></td>
                        
                        
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        
        

        
    </div>
@endsection
