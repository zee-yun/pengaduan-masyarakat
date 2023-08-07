@extends('layouts.admin')

@section('css')
<style>
    .laporan-top {
    padding-top: 16px;
}

.laporan-top .profile {
    width: 50px;
    height: 50px;
    float: left;
    border-radius: 50%;
    margin-right: 16px;
}

.laporan-top p {
    font-weight: 300;
    font-size: 16px;
    margin-top: 0px;
    margin-bottom: 0px;
}

.laporan-mid .judul-laporan {
    font-size: 500;
    font-size: 18px;
    color: #6a70fc;
    margin-top: 24px;
}

.laporan-mid p {
    font-weight: 300;
    font-size: 14px;
    color: #333;
    margin-top: 10px;
}

.laporan-bottom {
    margin-bottom: 24px;
}

.laporan-bottom img {
    width: 100px;
    height: 100px;
    cursor: pointer;
    margin-top: 10px;
}

.bold {
    font-style: bold;
}
</style>
@endsection
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Petugas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data Petugas</li>
        </ol>
    </nav>

    <button class="btn btn-link text-secondary btn-sm" href="{{ route('admin.user.index') }}">Kembali</button>
    <div class="card">
        <div class="card-body">
            <div class="laporan-top">
                <img src="{{ asset('images/user_default.svg') }}" alt="profile" class="profile">
                <div class="d-flex justify-content-between">
                    <div>
                        <p><span class="bold">NIP</span> :{{ $user->identity_number }}</p>
                        <p>Name :{{ $user->name }}</p>
                        <p>Email :{{ $user->email }}</p>
                        <p>Username :{{ $user->username }}</p>
                        <p>Phone :{{ $user->phone }}</p>
                        <p>Roles :
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                        </p>

                        <div class="row">
                            @if ($user->id != 1)
                            <div class="col-3">
                                <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger btn-sm mt-3" style="width: 100%" onclick="return confirm('APAKAH YAKIN?')">HAPUS</button>
                                </form>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection