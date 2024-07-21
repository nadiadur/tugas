@extends('kerangka.master')

@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Table Kegiatan</h4>
            <a class="btn btn-primary" href="{{ route('kegiatans.create') }}"> Tambah Kegiatan</a>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kegiatans as $kegiatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kegiatan->category }}</td>
                                <td>{{ $kegiatan->nama_keg }}</td>
                                <td>{{ $kegiatan->tanggal }}</td>
                                <td>
                                    @if ($kegiatan->gambar)
                                    <img src="/images/{{ $kegiatan->gambar }}" width="100px" class="img-thumbnail">
                                    @else
                                    <span>No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('kegiatans.show', $kegiatan->id) }}" class="btn btn-info btn-sm mx-1">Show</a>
                                        <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn btn-primary btn-sm mx-1">Update</a>
                                        <form action="{{ route('kegiatans.destroy', $kegiatan->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
