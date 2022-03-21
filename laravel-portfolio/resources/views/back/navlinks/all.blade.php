@extends('back.layouts.app')

@section('navlinks.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">NAVLINK</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Path</th>
                    <th scope="col">Text</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navlink as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{!! $item->icon !!}</td>
                        <td>{{ $item->path }}</td>
                        <td>{{ $item->text }}</td>
                    
                        <td>
                            <a href="{{ route('back.navlinks.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('back.navlinks.read', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
