@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Images</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Image</th>
                    <th scope='col'style="text-align: center;">Image_Title</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $images->id }}</th>
                    
                        <td><img src="{{ asset('images/'.$images->image) }}" width="100" height="100"></td>

                        <td>{{ $images->image_title }}</td>
                   
            
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('images.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
