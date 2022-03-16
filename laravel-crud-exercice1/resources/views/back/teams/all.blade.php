@extends('welcome')

@section('teams.all')
<h1>TEAMS</h1>
@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<a href="{{ route("back.teams.create") }}" class="btn btn-warning" >Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Coach</th>
        <th scope="col">Post</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($team as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->number }}</td>
                <td>{{ $item->coach }}</td>
                <td>{{ $item->post }}</td>
                <td>
                    <form action="{{ route("back.teams.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("back.teams.edit", $item->id) }}" class="btn btn-success" >Edit</a>
                </td>
                <td>
                    <a href="{{ route("back.teams.read", $item->id) }}" class="btn btn-warning" >Read</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
