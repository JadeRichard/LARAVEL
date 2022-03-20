@extends('back.layouts.app')

@section('skills.read')
@include('front.partials.navback')

<div class="container" style="height:30vh; width:50%; margin-top:200px">
    <h1>Read</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Skill</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $skill->id }}</th>
                <td>{{ $skill->skill }}</td>
                <td>{{ $skill->value }}</td>
                <td><a type="submit" class="btn btn-warning" href="{{ route('back.skills.all') }}">Back</button></td>
                
            </tr>
        </tbody>
    </table>

</div>

@endsection
