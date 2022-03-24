@extends('back.layouts.app')

@section('users.show')
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
                  Birth date
                </th>
                <th class="text-center">
                  Email
                </th>
                <th class="text-center">
                  Password
                </th>
                <th class="text-center">
                  Number of albums
                </th>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">{{ $user->id }}</th>
                    <td class="text-center">{{  $user->name  }}</td>
                    <td class="text-center">{{ $user->firstname }}</td>
                    <td class="text-center">{{ $user->age }}</td>
                    <td class="text-center">{{ $user->birthdate }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->password }}</td>
                    <td class="text-center">{{ $user->albumsnumber }}</td>
                    <td class="text-center"><a type="submit" class="btn btn-warning" href="{{ route('back.users.all') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
