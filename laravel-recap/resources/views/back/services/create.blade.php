@extends('back.layouts.app')
@section('content')
@include('back.partials.navbar')
    <div class='container'>
        <h1>Services</h1>
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

                    <td> 
                        <form action='{{ route('services.store') }}' method='post'>
                            @csrf
                            
                            <td style="text-align: center;"> <input type="text" name="title" value="{{ old('title') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="description" value="{{ old('description') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="button_text" value="{{ old('button_text') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="button_link" value="{{ old('button_link') }}"></td>
                            <td style="text-align: center;"> <input type="text" name="icon" value="{{ old('icon') }}"></td>
                            
                            <td style="text-align: center;"><button class="btn btncus2" type='submit'>Create</button> </td>
                            
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
