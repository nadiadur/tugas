@extends('kerangka.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Edit Kegiatan</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('kegiatans.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="{{ $kegiatan->category }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_keg" class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="nama_keg" name="nama_keg" value="{{ $kegiatan->nama_keg }}">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kegiatan->tanggal }}">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            @if ($kegiatan->gambar)
                                <img src="/images/{{ $kegiatan->gambar }}" class="mt-2" style="max-width: 200px;" alt="Gambar Kegiatan">
                            @else
                                <p class="text-muted">Belum ada gambar</p>
                            @endif
                        </div>
                        <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
