@extends('back.layouts.app')

@section('icons.create')
    <h1>Create</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('icons.store') }}" method="post">
        @csrf
        <label for="">Source :</label>
            
                <div class="container d-flex align-items-center justify-content-around">
                    <div class="form-check">
                        <input class='form-check-input @error('source') is-invalid @enderror' name="source" type="radio" checked value='<i class="bx bxs-home"></i>'>
                        <label class="form-check-label" for="source">
                            <i class='bx bxs-home'></i>
                        </label>
                      </div>
                      
                      <div class="form-check">
                        <input class='form-check-input @error('source') is-invalid @enderror' name="source" type="radio" value=<i class="bx bx-user"></i>
                        <label class="form-check-label" for="">
                            <i class='bx bx-user'></i>
                        </label>
                      </div>
                      
                      <div class="form-check">
                        <input class='form-check-input @error('source') is-invalid @enderror' name="source" type="radio" value='<i class="bx bx-book-content"></i>'>
                        <label class="form-check-label" for="">
                            <i class='bx bx-book-content'></i>
                        </label>
                      </div>
                      
                      <div class="form-check">
                        <input class='form-check-input @error('source') is-invalid @enderror' name="source" type="radio" value='<i class="bx bx-envelope"></i>'>
                        <label class="form-check-label" for="">
                            <i class='bx bx-envelope'></i>
                        </label>
                      </div>
                  </div>

            @error('icon')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <label for="">Link :</label>
        <input type="text" name="link">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
