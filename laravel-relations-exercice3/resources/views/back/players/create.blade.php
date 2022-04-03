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
                        <th scope='col'>Role</th>
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
                            <select name="gender">
                                <option value="">--GENDER--</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                                <option value="NB">NB</option>
                                <option value="Other">Other</option>
                            </select>
                            
                        </td>
                        <td>
                            <input type='text' name='country'>
                        </td>
                        <td>
                            <select name="role">
                                <option value="">--ROLE--</option>
                                <option value="1">Front</option>
                                <option value="2">Middle</option>
                                <option value="3">Back</option>
                                <option value="4">Substitute</option>
                            </select>
                            
                        </td>
                        <td>
                            <select name="clubname">
                                <option value="">--TEAM--</option>
                                @php
                                    $i = 0
                                @endphp
                                @foreach ($teams as $item)
                                    
                                <option value="{{ $i }}"> {{ $item->clubname }}</option>
                                @php
                                ++$i
                            @endphp
                                @endforeach
                            </select>
                            
                        </td>

                    </tr>
                </tbody>
            </table>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
