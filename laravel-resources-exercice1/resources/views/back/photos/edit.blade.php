@extends('back.layouts.app')

@section('photos.edit')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Photos Table</h4>
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
                                    Link
                                </th>
                                <th class="text-center">
                                    Album name
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="{{ route('photos.update', $photo->id) }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <th class="text-center">{{ $photo->id }}</th>
                                        <td class="text-center">
                                            <input type="text" name="name" value="{{ $photo->name }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="link" value="{{ $photo->link }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="albumname" value="{{ $photo->albumname }}">
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
