@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')


    <div class='container' style="margin-left: 20px;">
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

                    <td> 
                        <form action='{{ route('testimonials.store') }}' method='post' enctype="multipart/form-data">
                            @csrf
                            <td style="text-align: center;"> <input type="text" name="name" value="{{ old('name') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="date" value="{{ old('date') }}"></td>
                            <td style="text-align: center;"> <input type="number" step="0.1" name="rating" value="{{ old('rating') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="designation" value="{{ old('designation') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="category" value="{{ old('category') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ old('description') }}"></td>
                            <td style="text-align: center;"> <input type="file" name="photo" value="{{ old('photo') }}"></td>

                            <td style="text-align: center;"><button class="btn btncus2" type='submit'  style="background-color: #429db6; color: white;">Create</button> </td>
                            
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        
@endsection
