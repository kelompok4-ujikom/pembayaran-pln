@extends('layouts/app')

@section('title', 'ELECTRIC BANKING | User Detail')

<!-- Content Wrapper. Contains page content -->
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.beranda.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.auth.index') }}">Users</a></li>
                        <li class="breadcrumb-item active">Detail</li>
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
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-address-card"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ $user->name }}</span>
                            <span class="info-box-number">{{ $user->email }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-map-marked-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-number">
                                Jl. Otto Iskandardinata No.161, Karanganyar, Kec. Subang, Kabupaten Subang, Jawa Barat 41211
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
