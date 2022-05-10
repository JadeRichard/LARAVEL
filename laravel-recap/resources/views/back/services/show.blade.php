@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1 class='my-5'>Services</h1>
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
                    <th scope='row'>{{ $services->id }}</th>
                    
                        <td style="text-align: center;">{{ $services->title }}</td>
                        <td style="text-align: center;">{{ $services->description }}</td>
                        <td style="text-align: center;">{{ $services->button_text }}</td>
                        <td style="text-align: center;">{{ $services->button_link }}</td>
                        <td style="text-align: center;">{{ $services->icon }}</td>
                   
                    <td> 
                        <td><a type="submit" class="btn btncus2" style="background-color: #429db6; color: white;" href="{{ route('services.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
