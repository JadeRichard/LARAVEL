@extends('back.layouts.app')

@section('icons.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">ICON</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <a href="{{ route('icons.create') }}" class="btn btn-warning">Create</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Source</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($icon as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{!! $item->source !!}</td>
                        <td>{{ $item->link }}</td>
                        <td>
                            <form action="{{ route('icons.destroy', $item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('icons.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('icons.show', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
