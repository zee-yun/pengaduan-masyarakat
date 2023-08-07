@extends('layouts.admin')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.pengaduan.index') }}">Pengaduan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tanggapan Untuk Pengaduan</li>
        </ol>
    </nav>
    
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($pengaduan->foto) }}" class="card-img-top" alt="Foto Bukti">
                <div class="card-body">
                    <h5 class="card-title">{{ $pengaduan->user->name }}</h5>
                    <p class="card-text">{{ $pengaduan->isi_laporan }}</p>
                    <p class="card-text"><small class="text-muted">{{ $pengaduan->created_at }}</small></p>
                    @if ($pengaduan->status == '0')
                        <a href="" class="badge badge-danger">Pending</a>
                    @elseif($pengaduan->status == 'proses')
                        <a href="" class="badge badge-warning text-white">Proses</a>
                    @else
                        <a href="" class="badge badge-success">Selesai</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col">
            
            <form method="POST" action="{{ route('admin.tanggapan') }}">
                @csrf
                <h5>Tanggapan dari Petugas</h5>
                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">

                <div class="form-group">
                    <label class="form-label">Status</label>
                    <div class="input-group">
                        <select name="status" id="status" class="form-control">
                        @if ($pengaduan->status == '0')
                            <option selected value="0">Pending</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        @elseif($pengaduan->status == 'proses')
                            <option value="0">Pending</option>
                            <option selected value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        @else
                            <option value="0">Pending</option>
                            <option value="proses">Proses</option>
                            <option selected value="selesai">Selesai</option>
                        @endif
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <textarea id="tanggapan" rows="7" type="text" class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" placeholder="Belum ada tanggapan" required autofocus>{{ $tanggapan->tanggapan ?? '' }}
                        </textarea>

                        @error('tanggapan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="input-group">
                        <button type="submit" class="btn btn-success btn-sm">
                            Tanggapi
                        </button>
                        <a class="btn btn-link text-secondary btn-sm" href="{{ route('admin.pengaduan.index') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    
    </div>
</div>
@endsection