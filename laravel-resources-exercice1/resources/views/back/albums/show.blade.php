@extends('back.layouts.app')

@section('albums.show')
<div class="row mt-5 pt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Albums Table</h4>
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
                    <th class="text-center">{{ $album->id }}</th>
                    <td class="text-center">{{ $album->name }}</td>
                    <td class="text-center">{{ $album->description }}</td>
                    <td class="text-center">{{ $album->author }}</td>
                    <td class="text-center">{{ $album->photosnumber }}</td>
                    <td class="text-center"><a type="submit" class="btn btn-warning" href="{{ route('back.albums.all') }}">Back</button></td>
                    
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
