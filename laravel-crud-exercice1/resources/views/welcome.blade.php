@extends('back.layouts.app')

@section('content')
    @include('front.partials.navbar')
    <div class="content">
        @yield('users.all')
        @yield('cars.all')
        @yield('teams.all')
        @yield('articles.all')
    </div>
    
@endsection