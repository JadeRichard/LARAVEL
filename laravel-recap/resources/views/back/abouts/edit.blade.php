@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Banners</h1>
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
                    <th scope='col'>Subtitle</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Button</th>
                    <th scope='col'>Image</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $banner->id }}</th>

                    {{-- read_td_anchor --}}
                        <form action='{{ route('banners.update' , $banner->id) }}' method='post'>
                            @csrf
                            <td> <input type="text" name="subtitle" value="{{ $banner->subtitle }}"></td>
                               
                            <td> <input type="text" name="title" value="{{ $banner->title }}"></td>
                             
                            <td> <input type="text" name="button" value="{{ $banner->button }}"></td>
                            
                            <td>  <input type="file" name="image" value="{{ $banner->image }}"></td>
                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
