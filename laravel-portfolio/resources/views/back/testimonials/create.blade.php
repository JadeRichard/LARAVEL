@extends('back.layouts.app')

@section('testimonials.create')
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
    <form action="{{ route('back.testimonials.store') }}" method="post">
        @csrf
        <label for="">Text :</label>
        <input type="text" name="text">
        <label for="">Icon :</label>
        <input type="text" name="icon">
        <label for="">Name :</label>
        <input type="text" name="name">
        <label for="">Role :</label>
        <input type="text" name="role">
        <button type="submit" class="btn btn-warning">Create</button>
    </form>

@endsection
