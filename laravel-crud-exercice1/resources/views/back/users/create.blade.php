@extends('back.layouts.app')

@section('users.create')
    <h1>Create</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route("back.users.store") }}" method="post">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" >
        <label for="">First Name :</label>
        <input type="text" name="firstname" >
        <label for="">Email :</label>
        <input type="text" name="email" >
        <label for="">Password :</label>
        <input type="text" name="password" >
        <label for="">Profile pic :</label>
        <input type="text" name="profilepic" >
        <label for="">Role :</label>
        <input type="text" name="role" >
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
    