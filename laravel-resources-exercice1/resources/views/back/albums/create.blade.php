@extends('back.layouts.app')

@section('albums.create')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Albums Table</h4>
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Description
                                </th>
                                <th class="text-center">
                                    Author
                                </th>
                                <th class="text-center">
                                    Number of photos
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="{{ route('albums.store') }}" method="post">
                                        @csrf
                                        
                                        <td class="text-center">
                                            <input type="text" name="name" >
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="description" >
                                        </td>
                                        <td class="text-center">
                                            <input type="number" name="author" >
                                        </td>
                                        <td class="text-center">
                                            <input type="date" name="photosnumber" >
                                        </td>
                                        <td class="text-center"><button type="submit"
                                                class="btn btn-warning">Create</button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
