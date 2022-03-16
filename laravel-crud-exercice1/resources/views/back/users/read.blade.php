@extends('back.layouts.app')

@section('users.read')
    <h1>Show</h1>
    
    
        <label for="">Name : {{ $user->name }}</label>
        <label for="">First Name : {{ $user->firstname }}</label>
        <label for="">Email : {{ $user->email }}</label>
        <label for="">Password : {{ $user->password }}</label>
        <label for="">Profile pic : {{ $user->profilepic }}</label>
        <label for="">Role : {{ $user->role }}</label>
        <a type="submit" class="btn btn-warning" href="{{ route('back.users.all') }}">Back</button>

@endsection
    