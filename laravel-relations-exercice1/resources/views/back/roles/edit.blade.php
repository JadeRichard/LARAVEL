@extends('back.layouts.app')

@section('roles.edit')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Roles Table</h4>
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
                                    User ID
                                </th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="{{ route('roles.update', $role->id) }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <th class="text-center">{{ $role->id }}</th>
                                        <td class="text-center">
                                            <input type="text" name="name" value="{{ $role->name }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="user_id" value="{{ $role->user_id }}">
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
