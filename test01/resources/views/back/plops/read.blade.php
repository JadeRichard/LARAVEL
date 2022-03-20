@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Plops</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>prenom</th>
                    <th scope='col'>age</th>
                    <th scope='col'>plop</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $plop->id }}</th>
                    <td>{{ $plop->nom }}</td>
                    <td>{{ $plop->prenom }}</td>
                    <td>{{ $plop->age }}</td>
                    <td>{{ $plop->plop }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('plop.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
