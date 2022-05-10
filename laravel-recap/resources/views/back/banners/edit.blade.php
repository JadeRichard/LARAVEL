@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'  style="margin-left: 20px;" >
        @if ($errors->any())
            <div class='alert alert-danger' style="width: 100vw;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="text-align: center;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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

                        <form action='{{ route('banners.update' , $banners->id) }}' method='post'>
                            @csrf
                            <td style="text-align: center;"> <input type="text" name="title" value="{{ $banners->title }}"></td>
                               
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ $banners->description }}"></td>
                             
                            <td style="text-align: center;"> <input type="text" name="button_1_text" value="{{ $banners->button_1_text }}"></td>

                            <td style="text-align: center;"> <input type="text" name="button_1_link" value="{{ $banners->button_1_link }}"></td>

                            <td style="text-align: center;"> <input type="text" name="button_1_icon" value="{{ $banners->button_1_icon }}"></td>

                            <td style="text-align: center;"> <input type="text" name="button_2_text" value="{{ $banners->button_2_text }}"></td>

                            <td style="text-align: center;"> <input type="text" name="button_2_link" value="{{ $banners->button_2_link }}"></td>

                            <td style="text-align: center;"> <input type="text" name="button_2_icon" value="{{ $banners->button_2_icon }}"></td>
                            
                            <td style="text-align: center;"><button class="btn btncus2" style="background-color: #429db6; color: white;"  type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
