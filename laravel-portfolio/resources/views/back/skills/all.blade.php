@extends('back.layouts.app')

@section('skills.all')
    @include('front.partials.navback')
    <div class="container">

        <h1 class="my-5">SKILL</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <a href="{{ route('skills.create') }}" class="btn btn-warning">Create</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skill as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->skill }}</td>
                        <td>{{ $item->value }}</td>

                        <td>
                            <form action="{{ route('skills.destroy', $item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit"><i class='bx bx-trash'></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('skills.edit', $item->id) }}" class="btn btn-success"><i class='bx bx-edit-alt' ></i></a>
                        </td>
                        <td>
                            <a href="{{ route('skills.show', $item->id) }}" class="btn btn-warning"><i class='bx bx-search-alt' ></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
