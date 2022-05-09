@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1>Testimonials</h1>
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
                    <th scope='col'style="text-align: center;">Name</th>
                    <th scope='col'style="text-align: center;">Date</th>
                    <th scope='col'style="text-align: center;">Rating</th>
                    <th scope='col'style="text-align: center;">Designation</th>
                    <th scope='col'style="text-align: center;">Category</th>
                    <th scope='col'style="text-align: center;">Description</th>
                    <th scope='col'style="text-align: center;">Photo</th>
                </tr> 
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonials->id }}</th>

                        <form action='{{ route('testimonials.update' , $testimonials->id) }}' method='post' enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            
                            <td style="text-align: center;"> <input type="text" name="name" value="{{ $testimonials->name }}"></td>
                            <td style="text-align: center;"> <input type="text" name="date" value="{{ $testimonials->date }}"></td>
                            <td style="text-align: center;"> <input type="number" step="0.1" name="rating" value="{{ $testimonials->rating }}"></td>
                            <td style="text-align: center;"> <input type="text" name="designation" value="{{ $testimonials->designation }}"></td>
                            <td style="text-align: center;"> <input type="text" name="category" value="{{ $testimonials->category }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ $testimonials->description }}"></td>
                            <td style="text-align: center;"> <input type="file" name="photo" value="{{ $testimonials->photo }}"></td>
                            
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
