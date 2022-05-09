@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1>Users</h1>
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
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Email</th>
                    <th scope='col'style="text-align: center;">Password</th>
                </tr> 
            </thead>
            <tbody>
                <tr>

                    <td> 
                        <form action='{{ route('users.store') }}' method='post'>
                            @csrf
                            
                            <td style="text-align: center;"> <input type="text" name="name" value="{{ old('name') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="email" value="{{ old('email') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="password" value="{{ old('password') }}"></td>

                            <td style="text-align: center;"><button class="btn btncus2" type='submit'>Create</button> </td>
                            
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
