@extends('back.layouts.app')

@section('users.edit')
    <h1>Edit</h1>
    
    <form action="{{ route("back.users.update", $user->id) }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" value="{{ $user->name }}">
        <label for="">First Name :</label>
        <input type="text" name="firstname" value="{{ $user->firstname }}">
        <label for="">Email :</label>
        <input type="text" name="email" value="{{ $user->email }}">
        <label for="">Password :</label>
        <input type="text" name="password" value="{{ $user->password }}" >
        <label for="">Profile pic :</label>
        <input type="text" name="profilepic" value="{{ $user->profilepic }}" >
        <label for="">Role :</label>
        <input type="text" name="role" value="{{ $user->role }}" >
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>

@endsection
    