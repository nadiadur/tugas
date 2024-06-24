@extends('kerangka.master')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Edit Guru</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{ route('guru.update', $guru->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="nama" name="nama"  class="form-control @error('nama') is invalid
                                @enderror"
                              value="{{ old('nama')?? $guru->nama }}"
                                    placeholder="Nama">
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="alamat" class="form-control @error('alamat') is invalid
                                @enderror"
                                 name="alamat" value="{{old('alamat')?? $guru->alamat }}"
                                    placeholder="Alamat">
                                    @error('alamat')
                                    <div class="alert alert-danger">{{ message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Pengampu</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="pengampu" class="form-control @error('pengampu') is invalid
                                @enderror"
                                 name="pengampu" value="{{old('pengampu')?? $guru->pengampu }}"
                                    placeholder="Pengampu">
                                    @error('pengampu')
                                    <div class="alert alert-danger">{{ message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label>Telepon</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="number" id="telpon" class="form-control @error('telpon') is invalid
                                @enderror"
                                 name="telpon" value="{{ old('telpon')?? $guru->telpon}}"
                                    placeholder="Telpon">
                                    @error('telpon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                         
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection