@extends('layouts.app')

@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    
    <h5 class="mb-3">{{ __('PENGADUAN MASYARAKAT') }}</h5>

    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-2">
                <a type="button" href="{{ route('pengaduan.create') }}" class="btn btn-success btn-sm">
                    Ajukan Pengaduan
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelapor</th>
                        <th>Tanggal</th>
                        <th>Isi Laporan</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduans as $k => $pengaduan)
                        <tr>
                            <td>{{ $k += 1 }}</td>
                            <td>{{ $pengaduan->user->name }}</td>
                            <td>{{ $pengaduan->tgl_pengaduan }}</td>
                            <td>{{ $pengaduan->isi_laporan }}</td>
                            <td>
                                @if ($pengaduan->status == '0')
                                    <a href="" class="badge badge-danger">Pending</a>
                                @elseif($pengaduan->status == 'proses')
                                    <a href="" class="badge badge-warning text-white">Proses</a>
                                @else
                                    <a href="" class="badge badge-success">Selesai</a>
                                @endif
                            </td>
                            <td><a href="{{ route('pengaduan.detail', $pengaduan->id) }}" >Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
