@extends('layouts.app')

@section('welcome')
    
    @include('partials.header')

    <H1>{{ env('APP_VAR') }}</H1>

    <h2>{{ env('APP_VAR') }}</h2>

    @include('page.about')

    @include('page.contact')

    @include('partials.footer')

@endsection

    