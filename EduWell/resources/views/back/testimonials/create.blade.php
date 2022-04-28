@extends('back.layouts.app')
@section('content')
@include('back.partials.navback')
    <div class='container'>
        <h1>Testimonials</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Role</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>

                    <td> {{-- read_td_anchor --}}
                        <form action='{{ route('testimonials.store') }}' method='post'>
                            @csrf
                            <td> <input type="text" name="description"></td>
                               
                            <td> <input type="text" name="name"></td>
                             
                            <td> <input type="text" name="role"></td>
                            
                            <td><button class="btn  btncus2" type='submit'>Create</button> {{-- update_blade_anchor --}}</td>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
