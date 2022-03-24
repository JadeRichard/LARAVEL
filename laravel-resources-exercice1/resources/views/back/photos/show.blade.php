@extends('back.layouts.app')

@section('photos.show')
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
                    <th class="text-center">{{ $photo->id }}</th>
                    <td class="text-center">{{  $photo->name  }}</td>
                    <td class="text-center">{{ $photo->link }}</td>
                    <td class="text-center">{{ $photo->albumname }}</td>
                    <td class="text-center"><a type="submit" class="btn btn-warning" href="{{ route('back.photos.all') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
