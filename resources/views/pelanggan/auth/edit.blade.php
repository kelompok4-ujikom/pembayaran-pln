@extends('layouts/app')

@section('title', 'ELECTRIC BANKING | Edit Profile')

<!-- Content Wrapper. Contains page content -->
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('pelanggan.beranda.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                                Jl. Arief Rahman Hakim No.35, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41213
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md">
                    {{-- Your Content Here! --}}
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('pelanggan.update.profile', $user) }}">
                            @csrf
                            {{ method_field('patch') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                        value="{{ $user->name }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror    
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email"
                                        value="{{ $user->email }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="password_confirm">Password Confirm</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password-confirm">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
