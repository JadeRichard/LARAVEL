@extends('welcome')

@section('cars.all')
<h1>CARS</h1>
@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<a href="{{ route("back.cars.create") }}" class="btn btn-warning" >Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Year</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Reduction</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($car as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->brand }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->color }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->reduction }}</td>
                <td>
                    <form action="{{ route("back.cars.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("back.cars.edit", $item->id) }}" class="btn btn-success" >Edit</a>
                </td>
                <td>
                    <a href="{{ route("back.cars.read", $item->id) }}" class="btn btn-warning" >Read</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
