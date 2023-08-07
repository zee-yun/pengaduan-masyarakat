@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('pengaduan.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pengaduan</li>
        </ol>
    </nav>

    <h5 class="mb-3">{{ __('DETAIL PENGADUAN') }}</h5>

    <div class="card" style="width: 18rem;">
        <img src="{{ asset($pengaduan->foto) }}" class="card-img-top" alt="Foto Bukti">
        <div class="card-body">
            <h5 class="card-title">{{ $pengaduan->user->name }}</h5>
            <p class="card-text">{{ $pengaduan->isi_laporan }}</p>
            <p class="card-text"><small class="text-muted">{{ $pengaduan->tgl_pengaduan }}</small></p>
            @if ($pengaduan->status == '0')
                <a href="" class="badge badge-danger">Pending</a>
            @elseif($pengaduan->status == 'proses')
                <a href="" class="badge badge-warning text-white">Proses</a>
            @else
                <a href="" class="badge badge-success">Selesai</a>
            @endif
            <a href="{{ route('pengaduan.dashboard') }}" class="card-link">Kembali</a>
        </div>
    
    </div>
</div>

@endsection
