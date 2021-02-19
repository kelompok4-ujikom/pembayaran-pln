@extends('layouts/app')

@section('title', 'ELECTRIC BANKING | User data')

<!-- Content Wrapper. Contains page content -->
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data user</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.beranda.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    {{-- Your Content Here! --}}
                    <div class="card">
                        <div class="card-header">
                            <form method="POST" action="{{ route('admin.auth.search') }}">
                                @csrf
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="search" name="search" id="search" class="form-control float-right"
                                        placeholder="Search" aria-label="Search">

                                    <div class="input-group-append">
                                        <a type="button" type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama</th>
                                        <th>role akses</th>
                                        <th style="width: 50px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row"> {{ $loop->iteration }} </th>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ implode(', ', $user->levels()->get()->pluck('name')->toArray()) }} </td>
                                        <td>
                                            <a href="{{ route('admin.auth.detail', $user->id) }}"
                                                class="badge badge-info">detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="my-1 float-right">
                                {{ $users->links() }}
                            </div>
                            <div class="d-block col-12 mt-3">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
