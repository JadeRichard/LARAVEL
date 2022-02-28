@extends('layouts.app')

@section('home')
    
    @include('partials.nav')

    @include('partials.subheading')

    <div class="container p-0">
    <div class="welcome text-center my-5">
        <h1>Hello Coding School</h1>
        <h5>Lorem ipsum dolor sit, amet consectetur adipiscing elit. Libero molestias totam excepturi delectus.</h4>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a href="/about" class="btn btn-primary btn-lg" tabindex="-1" role="button">About</a>

    </div>
    </div>
    </div>

    @include('partials.footer')

@endsection