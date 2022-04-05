@extends('back.layouts.app')
@section('content')
@include('front.partials.navbar')
    <div class='container'>
        <h1>Ogitis</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('photo.update' , $photo->id) }}' method='post'>
            @csrf
            <div>
                <label for=>clubname</label>
                <input type='text' name='clubname' value='{{ $photo->clubname }}'>
            </div>
            <div>
                <label for=>city</label>
                <input type='text' name='city' value='{{ $photo->city }}'>
            </div>
            <div>
                <label for=>country</label>
                <input type='text' name='country' value='{{ $photo->country }}'>
            </div>
            <div>
                <label for=>maximum role</label>
                <input type='text' name='maxrole' value='{{ $photo->maxrole }}'>
            </div>
            <div>
                <label for=>maximum player</label>
                <input type='text' name='maxplayer' value='{{ $photo->maxplayer }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
