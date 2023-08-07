@extends('layouts.admin')

@section('header')
{{ _('Dashboard') }}
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Petugas</li>
        </ol>
    </nav>
    <h5>Daftar Petugas</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.user.create')}}" class="btn btn-success btn-sm text-white mb-3">Tambah User</a>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">NIP</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roles</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                    <tr>
                        <td>{{ $user->identity_number }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.user.detail', $user->id) }}" >Detail</a>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection