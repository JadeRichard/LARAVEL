@extends('back.layouts.app')

@section('content')
    @include('front.partials.navbar')

    @include('front.pages.banner')

    <main id="main">

        @include('front.pages.about')

        @include('front.pages.facts')

        @include('front.pages.skills')

        @include('front.pages.portfolio')

        @include('front.pages.testimonials')

        @include('front.pages.contact')

    </main><!-- End #main -->

    @include('front.partials.footer')
@endsection
