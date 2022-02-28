@extends('layouts.app')

@section('services')
    
    @include('partials.nav')

    @include('partials.subheading')

    <div class="container p-0 d-flex flex-column justify-content-center">
        <img src="./img/img_1.png" class="img_1 my-3">
    </div>
      
    <div class="cards d-flex justify-content-between">
        <div class="card" style="width: 23rem; height: fit-content;">
            <div class="card-body p-0">
              <h5 class="card-header">Card title</h5>
              <p class="card-text px-2 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button href="#" class="btn btn-primary btn-second ms-2 mb-3">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 23rem; height: fit-content;">
            <div class="card-body p-0">
            <h5 class="card-header">Card title</h5>
            <p class="card-text px-2 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button href="#" class="btn btn-primary btn-second ms-2 mb-3">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 23rem; height: fit-content;">
            <div class="card-body p-0">
            <h5 class="card-header">Card title</h5>
            <p class="card-text px-2 mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button href="#" class="btn btn-primary btn-second ms-2 mb-3">Go somewhere</a>
            </div>
        </div>
    </div>

    @include('partials.footer')

@endsection