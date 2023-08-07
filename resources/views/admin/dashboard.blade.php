@extends('layouts.admin')

@section('header')
{{ _('Dashboard') }}
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <div class="mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-white">Jumlah Pengaduan</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $pengaduan }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-white">Pengajuan Pending</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $pending }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-white">Pengajuan Proses</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $proses }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header bg-white">Pengaduan Selesai</div>
                <div class="card-body">
                    <div class="text-center">
                        {{ $selesai }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection