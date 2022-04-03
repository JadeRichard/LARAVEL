@extends('back.layouts.app')
@section('content')
    @include('front.partials.navbar')
    <div class='container'>
        <h1>Players</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('player.store') }}' method='post'>
            @csrf
            <table class='table'>
                <thead>
                    <tr>

                        <th scope='col'>Name</th>
                        <th scope='col'>First name</th>
                        <th scope='col'>Age</th>
                        <th scope='col'>Telephone</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Gender</th>
                        <th scope='col'>Country</th>
                        <th scope='col'>Club Name</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    <tr>

                        <td>
                            <input type='text' name='name'>
                        </td>
                        <td>
                            <input type='text' name='firstname'>
                        </td>
                        <td>
                            <input type='number' name='age'>
                        </td>
                        <td>
                            <input type='text' name='telnumber'>
                        </td>
                        <td>
                            <input type='text' name='email'>
                        </td>
                        <td>
                            <input type='text' name='gender'>
                        </td>
                        <td>
                            
                            <input type='text' name='country'>
                        </td>
                        <td>
                            
                            <input type='text' name='role'>
                        </td>
                        <td>
                            
                            <input type='text' name='clubname'>
                        </td>

                    </tr>
                </tbody>
            </table>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
