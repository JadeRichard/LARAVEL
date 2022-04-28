@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Services</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Icon</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
                    
                    <td><img src="{{ "/images/" . $service->icon }}" alt=""></td>
                    
                        <td>{{ $service->title }}</td>
                    
                        <td>{{ $service->description }}</td>
                   
                    {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('services.index') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
@endsection
