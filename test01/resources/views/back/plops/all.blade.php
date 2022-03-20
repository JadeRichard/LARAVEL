@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Plops</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('plop.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>prenom</th>
                    <th scope='col'>age</th>
                    <th scope='col'>plop</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($plops as $plop)
                    <tr>
                        <th scope='row'>{{ $plop->id }}</th>
                        <td>{{ $plop->nom }}</td>
                        <td>{{ $plop->prenom }}</td>
                        <td>{{ $plop->age }}</td>
                        <td>{{ $plop->plop }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('plop.destroy', $plop->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('plop.edit', $plop->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('plop.read', $plop->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
