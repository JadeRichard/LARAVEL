@extends('back.layouts.app')

@section('testimonials.all')
@include('front.partials.navback')
<div class="container">

  <h1 class="my-5">TESTIMONIAL</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Text</th>
        <th scope="col">Icon</th>
        <th scope="col">Name</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($testimonial as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->text }}</td>
        <td>{{ $item->icon }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->role }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection