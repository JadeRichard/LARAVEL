@extends('back.layouts.app')

@section('skills.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">SKILL</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Skill</th>
        <th scope="col">Value</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($skill as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->skill }}</td>
        <td>{{ $item->value }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection