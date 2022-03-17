@extends('welcome')

@section('articles.all')
<h1>ARTICLES</h1>
@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif
<a href="{{ route("back.articles.create") }}" class="btn btn-warning" >Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Author</th>
        <th scope="col">Publication Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($article as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->pubdate }}</td>
                <td>
                    <form action="{{ route("back.articles.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("back.articles.edit", $item->id) }}" class="btn btn-success" >Edit</a>
                </td>
                <td>
                    <a href="{{ route("back.articles.read", $item->id) }}" class="btn btn-warning" >Read</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
