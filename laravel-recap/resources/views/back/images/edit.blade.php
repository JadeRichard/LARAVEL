@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1>Images</h1>
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
                    <th scope='col'style="text-align: center;">Image</th>
                    <th scope='col'style="text-align: center;">Image_Title</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $images->id }}</th>

                        <form action='{{ route('images.update' , $images->id) }}' method='post' enctype="multipart/form-data">
                            @csrf
                            <td style="text-align: center;"> <input type="file" name="image" value="{{ $images->image }}"></td>
                            <td style="text-align: center;"> <input type="text" name="image_title" value="{{ $images->image_title }}"></td>
                            
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
