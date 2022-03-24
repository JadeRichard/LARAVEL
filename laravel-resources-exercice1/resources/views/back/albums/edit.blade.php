@extends('back.layouts.app')

@section('albums.edit')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> albums Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th class="text-center">
                                    #
                                </th>
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
                                    <form action="{{ route('albums.update', $album->id) }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <th class="text-center">{{ $album->id }}</th>
                                        <td class="text-center">
                                            <input type="text" name="name" value="{{ $album->name }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="decription" value="{{ $album->decription }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="number" name="author" value="{{ $album->author }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="date" name="photosnumber" value="{{ $album->photosnumber }}">
                                        </td>
                                        <td class="text-center"><button type="submit"
                                                class="btn btn-warning">Edit</button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
