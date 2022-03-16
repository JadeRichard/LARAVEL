@extends('back.layouts.app')

@section('portfolios.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">PORTFOLIO</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Filter</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($portfolio as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->image }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->filter }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection