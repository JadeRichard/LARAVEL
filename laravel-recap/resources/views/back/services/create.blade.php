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
                    <th scope='col' style="text-align: center;">#</th>
                    <th scope='col' style="text-align: center;">Title</th>
                    <th scope='col' style="text-align: center;">Description</th>
                    <th scope='col' style="text-align: center;">Button_Text</th>
                    <th scope='col' style="text-align: center;">Button_Link</th>
                    <th scope='col' style="text-align: center;">Icon</th>
                    <th scope='col' style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>
                        <form action='{{ route('services.store') }}' method='post'>
                            @csrf

                    <td style="text-align: center;"> <input type="text" name="title" value="{{ old('title') }}"></td>
                    <td style="text-align: center;"> <input type="text" name="description"
                            value="{{ old('description') }}"></td>
                    <td style="text-align: center;"> <input type="text" name="button_text"
                            value="{{ old('button_text') }}"></td>
                    <td style="text-align: center;"> <input type="text" name="button_link"
                            value="{{ old('button_link') }}"></td>
                    <td style="text-align: center;">
                        <div class="d-flex">
                            <input type="radio" id="huey" name="icon" value="{{ $services[0]->icon }}">
                            <label for="icon"><img src="{{ '/images/' . $services[0]->icon }}" alt=""></label>


                            <input type="radio" id="huey" name="icon" value="{{ $services[1]->icon }}">
                            <label for="icon"><img src="{{ '/images/' . $services[1]->icon }}" alt=""></label>


                            <input type="radio" id="huey" name="icon" value="{{ $services[2]->icon }}">
                            <label for="icon"><img src="{{ '/images/' . $services[2]->icon }}" alt=""></label>


                            <input type="radio" id="huey" name="icon" value="{{ $services[3]->icon }}">
                            <label for="icon"><img src="{{ '/images/' . $services[3]->icon }}" alt=""></label>

                        </div>
                    </td>

                    <td style="text-align: center;"><button class="btn btncus2"
                            style="background-color: #429db6; color: white;" type='submit'>Create</button> </td>

                    </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
