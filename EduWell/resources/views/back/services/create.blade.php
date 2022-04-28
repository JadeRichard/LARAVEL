@extends('back.layouts.app')
@section('content')
@include('back.partials.navback')
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

                    <td> {{-- read_td_anchor --}}
                        <form action='{{ route('services.store') }}' method='post'>
                            @csrf
                            <td> 
                                <div class="d-flex">
                                    <input type="radio" id="huey" name="icon" value="{{ $service[0]->icon }}">
                                    <label for="icon"><img src="{{ "/images/" . $service[0]->icon }}" alt=""></label>
                                  </div>
                                  <div class="d-flex">
                                    <input type="radio" id="huey" name="icon" value="{{ $service[1]->icon }}">
                                    <label for="icon"><img src="{{ "/images/" . $service[1]->icon }}" alt=""></label>
                                  </div>
                                  <div class="d-flex">
                                    <input type="radio" id="huey" name="icon" value="{{ $service[2]->icon }}">
                                    <label for="icon"><img src="{{ "/images/" . $service[2]->icon }}" alt=""></label>
                                  </div>
                                  <div class="d-flex">
                                    <input type="radio" id="huey" name="icon" value="{{ $service[3]->icon }}">
                                    <label for="icon"><img src="{{ "/images/" . $service[3]->icon }}" alt=""></label>
                                  </div>
                                
                                
                                {{-- @foreach ($service as $item)
                                <div class="d-flex">
                                    <input type="radio" id="huey" name="icon" value="{{ $item->icon }}">
                                    <label for="icon"><img src="{{ "/images/" . $item->icon }}" alt=""></label>
                                  </div>
                                @endforeach</td> --}}
                               
                            <td> <input type="text" name="title"></td>
                             
                            <td> <input type="text" name="description"></td>
                            
                            <td><button class="btn  btncus2" type='submit'>Create</button> {{-- update_blade_anchor --}}</td>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
