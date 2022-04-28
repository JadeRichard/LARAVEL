@extends('front.layouts.app')
@section('content')
    <div class='container'>
        <h1>Maps</h1>
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
                    <th scope='col'>Link</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $map->id }}</th>

                    {{-- read_td_anchor --}}
                        <form action='{{ route('maps.update' , $map->id) }}' method='post'>
                            @csrf
                            <td> <input type="text" name="link" value="{{ $map->link }}"></td>
                             
                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                        
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
