@extends('layouts.admin')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Petugas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Menambah Data Petugas</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Tambah Petugas/Admin</h5>
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf

                <div class="form-group">
                    <div class="input-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input id="identity_number" type="number" class="form-control @error('identity_number') is-invalid @enderror" placeholder="NIP" name="identity_number" value="{{ old('identity_number') }}" required autocomplete="identity_number" autofocus>

                        @error('identity_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input id="phone" type="number" placeholder="Number Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input id="username" type="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <select name="roles" id="roles" class="form-control">
                            <option value="petugas" selected>Pilih Level (Default Petugas)</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="input-group">
                        <button type="submit" class="btn btn-success">
                            Tambah
                        </button>
                        <a class="btn btn-link text-secondary" href="{{ route('admin.user.index') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection