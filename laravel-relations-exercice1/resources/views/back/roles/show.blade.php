@extends('back.layouts.app')

@section('roles.show')
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
                    <th class="text-center">{{ $role->id }}</th>
                    <td class="text-center">{{ $role->name }}</td>
                    
                    <td class="text-center">{{ $role->user_id }}</td>

                    <td class="text-center"><a type="submit" class="btn btn-warning" href="{{ route('back.roles.all') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
