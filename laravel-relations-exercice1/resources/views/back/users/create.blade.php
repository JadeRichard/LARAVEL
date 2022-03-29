@extends('back.layouts.app')

@section('users.create')
    <div class="row mt-5 pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Users Table</h4>
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
                                    <form action="{{ route('users.store') }}" method="post">
                                        @csrf
                                        
                                        <td class="text-center">
                                            <input type="text" name="name" >
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="firstname" >
                                        </td>
                                        <td class="text-center">
                                            <input type="number" name="age" >
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="email" >
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="password" >
                                        </td>
                                        <td class="text-center">
                                            <input type="date" name="birthdate" >
                                        </td>
                                        <td class="text-center">
                                            <input type="text" name="gender" >
                                        </td>
                                        <td class="text-center">
                                            <select name="role" id="role">
                                                @foreach ($roles as $item)
                                                    <option value=" 1"> 1</option>
                                                @endforeach
                                            </select>
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
