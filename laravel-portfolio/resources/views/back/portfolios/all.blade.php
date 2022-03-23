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

        <a href="{{ route('portfolios.create') }}" class="btn btn-warning">Create</a>

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
                        <td><img src="{{ asset("img/" . $item->image) }}" alt=""></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->filter }}</td>
                        <td>
                            <form action="{{ route('portfolios.destroy', $item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('portfolios.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('portfolios.show', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
