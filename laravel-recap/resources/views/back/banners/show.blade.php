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
                    <th scope='col'style="text-align: center;">Button_1_Text</th>
                    <th scope='col'style="text-align: center;">Button_1_Link</th>
                    <th scope='col'style="text-align: center;">Button_1_Icon</th>
                    <th scope='col'style="text-align: center;">Button_2_Text</th>
                    <th scope='col'style="text-align: center;">Button_2_Link</th>
                    <th scope='col'style="text-align: center;">Button_2_Icon</th>
                    <th scope='col'style="text-align: center;">Action</th>
                    
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banners->id }}</th>
                    
                        <td>{{ $banners->title }}</td>
                        <td>{{ $banners->description }}</td>
                        <td>{{ $banners->button_1_text }}</td>
                        <td>{{ $banners->button_1_link }}</td>
                        <td>{{ $banners->button_1_icon }}</td>
                        <td>{{ $banners->button_2_text }}</td>
                        <td>{{ $banners->button_2_link }}</td>
                        <td>{{ $banners->button_2_icon }}</td>
                   
                    <td> 
                        <td><a type="submit" class="btn btncus2" href="{{ route('banners.index') }}" style="background-color: #429db6; color: white;" >Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
