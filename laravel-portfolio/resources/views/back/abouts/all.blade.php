@extends('back.layouts.app')

@section('abouts.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">ABOUT</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

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
                        <td>
                            <a href="{{ route('abouts.edit', $item) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('abouts.show', $item) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
