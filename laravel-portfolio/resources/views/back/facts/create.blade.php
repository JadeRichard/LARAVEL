@extends('back.layouts.app')

@section('facts.create')

<div class="container">
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

    

    <form action="{{ route('facts.store') }}" method="post">
        @csrf
        <div class="container d-flex align-items-center justify-content-around">
            <div class="form-check">
                <input class='form-check-input @error('icon') is-invalid @enderror' name="icon" type="radio" checked value='<i class="bx bxs-home"></i>'>
                <label class="form-check-label" for="icon">
                    <i class='bx bxs-home'></i>
                </label>
              </div>
              
              <div class="form-check">
                <input class='form-check-input @error('icon') is-invalid @enderror' name="icon" type="radio" value=<i class="bx bx-user"></i>
                <label class="form-check-label" for="">
                    <i class='bx bx-user'></i>
                </label>
              </div>
              
              <div class="form-check">
                <input class='form-check-input @error('icon') is-invalid @enderror' name="icon" type="radio" value='<i class="bx bx-book-content"></i>'>
                <label class="form-check-label" for="">
                    <i class='bx bx-book-content'></i>
                </label>
              </div>
              
              <div class="form-check">
                <input class='form-check-input @error('icon') is-invalid @enderror' name="icon" type="radio" value='<i class="bx bx-envelope"></i>'>
                <label class="form-check-label" for="">
                    <i class='bx bx-envelope'></i>
                </label>
              </div>
          </div>

    @error('icon')
        <div class="text-danger">{{ $message }}</div>
    @enderror
        <label for="">Number :</label>
        <input type="number" name="number">
        <label for="">Important :</label>
        <input type="text" name="important">
        <label for="">Text :</label>
        <input type="text" name="text">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
</div>
    

@endsection
