@extends('back.layouts.app')

@section('images.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">IMAGE</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Source</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($image as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td><img src="{{ asset("img/" . $item->source) }}" alt=""></td>
                        <td>
                            <a href="{{ route('images.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('images.show', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
