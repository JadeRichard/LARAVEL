@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Banners</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Subtitle</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Button</th>
                    <th scope='col'>Image</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banners->id }}</th>
                    
                        <td>{{ $banners->subtitle }}</td>
                    
                        <td>{!! $banners->title !!}</td>
                    
                        <td>{{ $banners->button }}</td>
                   
                        <td><img src="{{ asset("images/" . $banners->image) }}" alt="" style="width:50%; height:50%;"></td>
                    <td> {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('banners.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
