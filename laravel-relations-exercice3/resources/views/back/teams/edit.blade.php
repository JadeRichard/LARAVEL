@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1>Teams</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('team.update' , $team->id) }}' method='post'>
            @csrf
            <div>
                <label for=>clubname</label>
                <input type='text' name='clubname' value='{{ $team->clubname }}'>
            </div>
            <div>
                <label for=>city</label>
                <input type='text' name='city' value='{{ $team->city }}'>
            </div>
            <div>
                <label for=>country</label>
                <input type='text' name='country' value='{{ $team->country }}'>
            </div>
            <div>
                <label for=>maximum role</label>
                <input type='text' name='maxrole' value='{{ $team->maxrole }}'>
            </div>
            <div>
                <label for=>maximum player</label>
                <input type='text' name='maxplayer' value='{{ $team->maxplayer }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
