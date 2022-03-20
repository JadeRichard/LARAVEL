@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Plops</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('plop.update' , $plop->id) }}' method='post'>
            @csrf
            <div>
                <label for=>nom</label>
                <input type='text' name='nom' value='{{ $plop->nom }}'>
            </div>
            <div>
                <label for=>prenom</label>
                <input type='text' name='prenom' value='{{ $plop->prenom }}'>
            </div>
            <div>
                <label for=>age</label>
                <input type='text' name='age' value='{{ $plop->age }}'>
            </div>
            <div>
                <label for=>plop</label>
                <input type='text' name='plop' value='{{ $plop->plop }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
