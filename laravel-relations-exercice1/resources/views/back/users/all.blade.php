@extends('back.layouts.app')

@section('users.all')
<div class="row mt-5 pt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users Table</h4>
              <a href="{{ route('users.create') }}" class="btn btn-warning">Create</a>
              @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
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
                <th class="text-center">
                  Edit
                </th>
                <th class="text-center">
                  Show
                </th>

              </thead>
              <tbody>
                  @foreach ($user as $item)
                  <tr>
                    <td class="text-center">
                      {{ $item->id }}
                    </td>
                    <td class="text-center">
                      {{ $item->name }}
                    </td>
                    <td class="text-center">
                      {{ $item->firstname }}
                    </td>
                    <td class="text-center">
                      {{ $item->age }}
                    </td>
                    <td class="text-center">
                      {{ $item->email }}
                    </td>
                    <td class="text-center">
                      {{ $item->password }}
                    </td>
                    <td class="text-center">
                      {{ $item->birthdate }}
                    </td>
                    <td class="text-center">
                      {{ $item->gender }}
                    </td>
                    <td class="text-center">
                      {{ $item->role }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('users.edit', $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('users.show', $item->id) }}" class="btn btn-warning">Show</a>
                    </td>
                  </tr>
                  <td class="text-center">
                        <form action="{{ route('users.destroy', $item->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection



