@extends('back.layouts.app')

@section('navlinks.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">NAVLINK</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Icon</th>
        <th scope="col">Path</th>
        <th scope="col">Text</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($navlink as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->icon }}</td>
        <td>{{ $item->path }}</td>
        <td>{{ $item->text }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection