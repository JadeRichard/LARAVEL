@extends('back.layouts.app')

@section('facts.edit')
    <h1>Edit</h1>

    <form action="{{ route('facts.update', $fact->id) }}" method="post">
        @csrf
        @method("PUT")
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
        <input type="number" name="number" value="{{ $fact->number }}">
        <label for="">Important :</label>
        <input type="text" name="important" value="{{ $fact->important }}">
        <label for="">Text :</label>
        <input type="text" name="text" value="{{ $fact->text }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
