@extends('back.layouts.app')

@section('icons.edit')
    <h1>Edit</h1>

    <form action="{{ route('back.icons.update', $icon->id) }}" method="post" enctype="multipart/form-data">
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
        <input type="text" name="link" value="{{ $icon->link }}">
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
@endsection
