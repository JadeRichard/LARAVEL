@extends('back.layouts.app')

@section('facts.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">FACT</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Icon</th>
        <th scope="col">Number</th>
        <th scope="col">Important</th>
        <th scope="col">Text</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($fact as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->icon }}</td>
        <td>{{ $item->number }}</td>
        <td>{{ $item->important }}</td>
        <td>{{ $item->text }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection