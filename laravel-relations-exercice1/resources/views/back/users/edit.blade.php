@extends('back.layouts.app')

@section('users.edit')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Users Table</h4>
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
                                    First Name
                                </th>
                                <th class="text-center">
                                    Age
                                </th>
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Password
                                </th>
                                <th class="text-center">
                                    Date of birth
                                </th>
                                <th class="text-center">
                                    Gender
                                </th>
                                <th class="text-center">
                                    Role
                                </th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <form action="{{ route('users.update', $user->id) }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <th class="text-center">{{ $user->id }}</th>
                                        <td class="text-center">
                                            <input type="text" name="name" value="{{ $user->name }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="firstname" value="{{ $user->firstname }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="number" name="age" value="{{ $user->age }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="email" value="{{ $user->email }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="password" value="{{ $user->password }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="date" name="birthdate" value="{{ $user->birthdate }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="gender" value="{{ $user->gender }}">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="role" value="{{ $user->role }}">
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
