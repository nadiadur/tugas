@extends('kerangka.master')

@section('content')
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Table Santri</h4>
                    <a class="btn btn-primary" href="{{ route('santri.create') }}"> Tambah Santri</a>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($santris as $santri)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $santri->nama }}</td>
                                        <td>{{ $santri->tanggal_masuk }}</td>
                                        <td>{{ $santri->alamat }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-primary btn-sm mx-1">Update</a>
                                                <form action="{{ route('santri.destroy', $santri->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
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
    </div>
</section>
@endsection
