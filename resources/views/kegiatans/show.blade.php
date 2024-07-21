@extends('kerangka.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Detail Kegiatan</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Category:</strong>
                        </div>
                        <div class="col-md-9">
                            {{ $kegiatan->category }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Nama Kegiatan:</strong>
                        </div>
                        <div class="col-md-9">
                            {{ $kegiatan->nama_keg }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Tanggal:</strong>
                        </div>
                        <div class="col-md-9">
                            {{ $kegiatan->tanggal }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <strong>Gambar:</strong>
                        </div>
                        <div class="col-md-9">
                            @if ($kegiatan->gambar)
                            <img src="/images/{{ $kegiatan->gambar }}" class="img-thumbnail" width="200px">
                            @else
                            <span>No Image</span>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <a href="{{ route('kegiatans.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
