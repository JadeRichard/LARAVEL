@extends('back.layouts.app')

@section('content-back')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Users</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success mb-0 mt-2">
                {{ session()->get('success') }}
            </div>
        @endif

        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMAIL</th>
                                                <th>NICKNAME</th>
                                                <th>PROFILE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td style="font-weight: 900">{{ $user->id }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->nickname }}</td>
                                                    <td>{{ $user->profile->name }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method("delete")
                                                                <button class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
