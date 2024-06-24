@extends('kerangka.master')
@section('content')
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="card-title text-center">Table Guru</h4>
                    <a class="btn btn-primary" href="{{ route('guru.create') }}"> Tambah Guru</a>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @elseif (session()->has('failed'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     {{session('failed')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pengampu</th>
                                        <th>No Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gurus as $guru)
                                    <tr>
                                       
                                            
                                        <td>{{$loop->iteration}} </td>
                                        <td>{{$guru->nama}} </td>
                                        <td>{{$guru->alamat}}</td>
                                        <td >{{$guru->pengampu}}</td>
                                        <td >{{$guru->telpon}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-warning mx-1" 
                                                href="{{ route('guru.edit' , $guru->id) }}">Update</a>
                                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mx-1">Delete</button>
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