@extends('back.layouts.app')

@section('albums.all')
<div class="row mt-5 pt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Albums Table</h4>
              <a href="{{ route('albums.create') }}" class="btn btn-warning">Create</a>
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
                  Description
                </th>
                <th class="text-center">
                  Author
                </th>
                <th class="text-center">
                  Number of photos
                </th>
                <th class="text-center">
                  Edit
                </th>
                <th class="text-center">
                  Show
                </th>
              </thead>
              <tbody>
                  @foreach ($album as $item)
                  <tr>
                    <td class="text-center">
                      {{ $item->id }}
                    </td>
                    <td class="text-center">
                      {{ $item->name }}
                    </td>
                    <td class="text-center">
                      {{ $item->description }}
                    </td>
                    <td class="text-center">
                      {{ $item->author }}
                    </td>
                    <td class="text-center">
                      {{ $item->photosnumber }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('albums.edit', $item->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('albums.show', $item->id) }}" class="btn btn-warning">Show</a>
                    </td>
                  </tr>
                  <td class="text-center">
                        <form action="{{ route('albums.destroy', $item->id) }}" method="post">
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
