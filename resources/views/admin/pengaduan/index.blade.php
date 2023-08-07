@extends('layouts.admin')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
        </ol>
    </nav>
    <h5>Pengaduan Masyarakat</h5>
    <div class="card">
        <div class="card-body">
        <a class="btn btn-link text-secondary" href="{{ route('admin.cetak') }}">Cetak PDF</a>
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
                            <td>{{ $pengaduan->created_at }}</td>
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
                            <td>
                                <a href="{{ route('admin.pengaduan.detail', $pengaduan->id) }}" >Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection