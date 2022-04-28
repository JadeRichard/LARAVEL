@extends('back.layouts.app')
@section('content')
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
                    <th scope='col'>#</th>
                    <th scope='col'>Icon</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Description</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>

                     {{-- read_td_anchor --}}
                        <form action='{{ route('services.update' , $service->id) }}' method='post'>
                            @csrf
                            @method("PUT")
                            <td> <div class="d-flex">
                                <input type="radio" id="huey" name="icon" value="{{ $services[0]->icon }}">
                                <label for="icon"><img src="{{ "/images/" . $services[0]->icon }}" alt=""></label>
                              </div>
                              <div class="d-flex">
                                <input type="radio" id="huey" name="icon" value="{{ $services[1]->icon }}">
                                <label for="icon"><img src="{{ "/images/" . $services[1]->icon }}" alt=""></label>
                              </div>
                              <div class="d-flex">
                                <input type="radio" id="huey" name="icon" value="{{ $services[2]->icon }}">
                                <label for="icon"><img src="{{ "/images/" . $services[2]->icon }}" alt=""></label>
                              </div>
                              <div class="d-flex">
                                <input type="radio" id="huey" name="icon" value="{{ $services[3]->icon }}">
                                <label for="icon"><img src="{{ "/images/" . $services[3]->icon }}" alt=""></label>
                              </div></td>
                               
                            <td> <input type="text" name="title" value="{{ $service->title }}"></td>
                             
                            <td> <input type="text" name="description" value="{{ $service->description }}"></td>
                            
                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
