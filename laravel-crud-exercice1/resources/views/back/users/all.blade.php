@extends('welcome')

@section('users.all')
<h1>USERS</h1>
@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<a href="{{ route("back.users.create") }}" class="btn btn-warning" >Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Profile Pic</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->profilepic }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    <form action="{{ route("back.users.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("back.users.edit", $item->id) }}" class="btn btn-success" >Edit</a>
                </td>
                <td>
                    <a href="{{ route("back.users.read", $item->id) }}" class="btn btn-warning" >Read</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
