@extends('front.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Maps</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Link</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $maps->id }}</th>
                    
                    
                        <td>{!! $maps->title !!}</td>
                    
                
                    <td> {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('maps.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
