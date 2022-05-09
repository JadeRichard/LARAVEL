@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Banners</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'style="text-align: center;">#</th>
                    <th scope='col'style="text-align: center;">Title</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Button_Text</th>
                    <th scope='col'style="text-align: center;">Button_Link</th>
                    <th scope='col'style="text-align: center;">Icon</th>
                    <th scope='col'style="text-align: center;">Action</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banners->id }}</th>
                    
                        <td>{{ $banners->title }}</td>
                        <td>{{ $banners->description }}</td>
                        <td>{{ $banners->button_text }}</td>
                        <td>{{ $banners->button_link }}</td>
                        <td>{{ $banners->icon }}</td>
                   
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('banners.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
