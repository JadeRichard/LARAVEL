@extends('layouts.app')

@section('about')
    @include('partials.nav')

    @include('partials.subheading')

    <div class="container d-flex p-0 my-5">

        <div class="col-6">
            <img src="./img/img_2.png" class="img_2">
        </div>

        <div class="col-6">
            <h3>About Modern School <i class="fa-solid fa-angles-right"></i></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enim sit at recusandae aut! Eius, beatae
                    deserunt iste explicabo libero natus consequuntur laboriosam ab unde id, architecto sequi asperiores
                    impedit.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enim sit at recusandae aut! Eius, beatae
                        deserunt iste explicabo libero natus consequuntur laboriosam ab unde id, architecto sequi asperiores
                        impedit.</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enim sit at recusandae aut! Eius, beatae
                            deserunt iste explicabo libero natus consequuntur laboriosam ab unde id, architecto sequi asperiores
                            impedit.</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos enim sit at recusandae aut! Eius, beatae
                                deserunt iste explicabo libero natus consequuntur laboriosam ab unde id, architecto sequi asperiores
                                impedit.</p>
        </div>
    </div>

    @include('partials.footer')
@endsection
