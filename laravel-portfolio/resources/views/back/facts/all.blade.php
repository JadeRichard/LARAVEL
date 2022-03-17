@extends('back.layouts.app')

@section('facts.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">FACT</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        {{-- @if ($fact >= 4)
        <div class="alert alert-danger">
            <div>aaaaaa</div>
        </div>
        @endif --}}

        <a href="{{ route('back.facts.create') }}" class="btn btn-warning">Create</a>

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
                        <td>
                            <form action="{{ route('back.facts.destroy', $item->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('back.facts.edit', $item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('back.facts.read', $item->id) }}" class="btn btn-warning">Read</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
