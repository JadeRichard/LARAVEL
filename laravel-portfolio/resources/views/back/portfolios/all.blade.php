@extends('back.layouts.app')

@section('portfolios.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">PORTFOLIO</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <a href="{{ route('back.portfolios.create') }}" class="btn btn-warning">Create</a>

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
                        <td>
                            <form action="{{ route('back.portfolios.destroy', $item->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('back.portfolios.edit', $item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('back.portfolios.read', $item->id) }}" class="btn btn-warning">Read</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
