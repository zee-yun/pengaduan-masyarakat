@extends('layouts.app')

@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('pengaduan.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajukan Pengaduan</li>
        </ol>
    </nav>
    
    <h5 class="mb-3">{{ __('PENGADUAN MASYARAKAT') }}</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Ajukan Pengaduan</h5>
            <form action="{{route('pengaduan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <textarea name="isi_laporan" placeholder="Masukkan Isi Laporan" class="form-control"
                        rows="4">{{ old('isi_laporan') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('tgl_kejadian') }}" name="tgl_kejadian"
                        placeholder="Pilih Tanggal Kejadian" class="form-control" onfocusin="(this.type='date')"
                        onfocusout="(this.type='text')">
                </div>
                <div class="form-group">
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-2">Kirim</button>
                <a class="btn btn-secondary btn-sm mt-2" href="{{route('pengaduan.dashboard')}}">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection
