@extends('back.layouts.app')

@section('titles.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">TITLE</h1>

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($title as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->subtitle }}</td>
                        <td>
                          <a href="{{ route('back.titles.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                      </td>
                      <td>
                          <a href="{{ route('back.titles.read', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
