@extends('back.layouts.app')

@section('abouts.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">ABOUT</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Info</th>
        <th scope="col">Text</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($about as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->info }}</td>
        <td>{{ $item->text }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection