@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1>Servoces</h1>
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

                        <form action='{{ route('services.update' , $services->id) }}' method='post'>
                            @csrf
                            @method("PUT")
                            
                            <td style="text-align: center;"> <input type="text" name="title" value="{{ $services->title }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ $services->description }}"></td>
                            <td style="text-align: center;"> <input type="text" name="button_text" value="{{ $services->button_text }}"></td>
                            <td style="text-align: center;"> <input type="text" name="button_link" value="{{ $services->button_link }}"></td>
                            <td style="text-align: center;"> <input type="text" name="icon" value="{{ $services->icon }}"></td>
                            
                            <td style="text-align: center;"><button class="btn btncus2" style="background-color: #429db6; color: white;" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
