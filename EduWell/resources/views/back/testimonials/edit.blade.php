@extends('back.layouts.app')
@section('content')
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
                    <th scope='col'>#</th>
                    <th scope='col'>Description</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Role</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonial->id }}</th>

                    {{-- read_td_anchor --}}
                        <form action='{{ route('testimonials.update' , $testimonial->id) }}' method='post'>
                            @csrf
                            @method("PUT")
                            <td> <input type="text" name="description" value="{{ $testimonial->description }}"></td>
                               
                            <td> <input type="text" name="name" value="{{ $testimonial->name }}"></td>
                             
                            <td> <input type="text" name="role" value="{{ $testimonial->role }}"></td>
                            
                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                    
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
